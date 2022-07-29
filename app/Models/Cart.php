<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class Cart {

    public function show(): array
    {
        $contact = DB::table('contact')->get();
        $social = DB::table('social')->get();
        $hours = DB::table('hours')->get();
        $about = DB::table('about')->first();

        return [
            'home' => 0, // for template
            'contact' =>$contact,
            'social' =>$social,
            'hours' => $hours,
            'about' =>$about,
        ];
    }

    public function calculateTotalCart($request) {
        $cart = $request->session()->get('cart');
        $total_price = 0;
        $total_quantity = 0;

        foreach($cart as $id => $product){
            $product = $cart[$id];
            $price = $product['price'];
            $quantity = $product['quantity'];

            $total_price = $total_price + ($price * $quantity);
            $total_quantity = $total_quantity + $quantity;

        }

        $request->session()->put('total', $total_price);
        $request->session()->put('quantity', $total_quantity);
    }

    public function AddToCard($request) {
        //if we have cart in the session
        if($request->session()->has('cart')){
            $cart = $request->session()->get('cart'); //array of associative arrays ['id' => [], 'id' => []]
            $products_array_ids = array_column($cart, 'id'); // ['id', 'id']
            $id = $request->input('id');
            // add product to cart
            if (!in_array($id, $products_array_ids)) {
                $name = $request->input('name');
                $image = $request->input('image');
                $price = $request->input('price');
                $quantity = $request->input('quantity');
                $sale_price = $request->input('sale_price');

                if ($sale_price != null) {
                    $price_to_charge = $sale_price;
                } else {
                    $price_to_charge = $price;
                }

                $product_array = array(
                    'id' => $id,
                    'name' => $name,
                    'image' => $image,
                    'price' => $price_to_charge,
                    'quantity' => $quantity,
                );

                $cart[$id] = $product_array;
                $request->session()->put('cart', $cart);
            } else {//product is already in cart
                $cart[$id]['quantity'] = $cart[$id]['quantity'] + 1;
                $request->session()->put('cart', $cart);
            }
        } // if we do not have cart in session
        else {
            //create cart
            $cart = array();
            $id = $request->input('id');
            $name = $request->input('name');
            $image = $request->input('image');
            $price = $request->input('price');
            $quantity = $request->input('quantity');

            $product_array = array(
                'id' => $id,
                'name' => $name,
                'image' => $image,
                'price' => $price,
                'quantity' => $quantity,
            );

            $cart[$id] = $product_array;
            $request->session()->put('cart', $cart);


        }

        $this->calculateTotalCart($request);
    }


}