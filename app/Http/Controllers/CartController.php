<?php

namespace App\Http\Controllers;

use App\Models\Order_items;
use App\Models\Orders;
use App\Models\Products;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\New_;
use App\Http\Services\CartService;

class CartController extends Controller
{
    //home variable is because of template

    protected $CartService;

    public function __construct(CartService $cartService){
        $this->CartService = $cartService;
    }

    public function ShowCart() {
        return \view('cart', $this->CartService->getCart());
    }

    public function AddToCart(Request $request): \Illuminate\Http\RedirectResponse
    {
        $this->CartService->SetAddToCart($request);

        return redirect()->route('cart');
    }

    public function RemoveFromCart(Request $request): \Illuminate\Http\RedirectResponse
    {
        $this->CartService->SetRemoveFromCart($request);
        return redirect()->route('cart');

    }

    public function EditProductQuantity(Request $request): \Illuminate\Http\RedirectResponse
    {
        $this->CartService->SetEditProductQuantity($request);
        return redirect()->route('cart');
    }



    public function checkout() {
        $home = 0;
        $contact = DB::table('contact')->get();
        $social = DB::table('social')->get();
        $hours = DB::table('hours')->get();
        return view('checkout', compact('home', 'contact', 'social', 'hours'));
    }

    public function place_order(Request $request) {
        if($request->session()->has('cart')) {
            //place order
            $name = $request->input('name');
            $email = $request->input('email');
            $phone = $request->input('phone');
            $city = $request->input('city');
            $address = $request->input('address');

            $cost = $request->session()->get('total');
            $status = 'New';
            $date = date('Y-m-d');


            $cart = $request->session()->get('cart');



            $order_id = DB::table('orders')->InsertGetId([
                'name' => $name,
                'email' => $email,
                'phone' => $phone,
                'city' => $city,
                'address' => $address,
                'cost' =>$cost,
                'status' => $status,
                'date' => $date,
                'updated_at' => Carbon::now()->toDateTimeString(),
            ], 'id');


            foreach($cart as $id => $product) {
                $product = $cart[$id];
                $product_id = $product['id'];
                $product_name = $product['name'];
                $product_price = $product['price'];
                $product_quantity = $product['quantity'];
                //desreasing quantity in products table
                $product_inProducts = Products::where('id', $product_id)->first();
                $product_inProducts->quantity = $product_inProducts->quantity - $product_quantity;
                $product_inProducts->save();
                //end of desreasing quantity in products table
                $product_image = $product['image'];

                $data = [
                    'order_id' => $order_id,
                    'product_id' => $product_id,
                    'product_name' => $product_name,
                    'product_price' => $product_price,
                    'product_quantity' => $product_quantity,
                    'product_image' => $product_image,
                    'order_date' => $date,
                ];

                Order_items::insert([
                    'order_id' => $order_id,
                    'product_id' => $product_id,
                    'product_name' => $product_name,
                    'product_price' => $product_price,
                    'product_quantity' => $product_quantity,
                    'product_image' => $product_image,
                    'order_date' => $date,
                ]);


            }


            $request->session()->put('order_id', $order_id);
            $request->session()->forget('cart');

            return redirect('order');


        } else {
            return redirect('/');
        }

    }

    public function order() {
        $home = 0;
        $contact = DB::table('contact')->get();
        $social = DB::table('social')->get();
        $hours = DB::table('hours')->get();
        return view('order', compact('home', 'contact', 'social', 'hours'));
    }

}
