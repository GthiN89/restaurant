<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\Order_items;
use App\Models\Orders;
use App\Models\Products;


class AdminPanelController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        return view('backend.index');
    }
    //admin panel Controller, contains categories, products and orders, restaurant menu has its own controller, settings in admin panel has its own controller


    //categories

    public function categories() {
        $categories = Categories::all();
        return view('backend.categories.categories', compact('categories'));
    }

    public function add_category() {
        return view('backend.categories.add_category');
    }

    public function submit_category(Request $request) {

        $category = new Categories;
        $category->category = $request->category;
        $category->save();

        return redirect()->route('categories')->with('message', 'Category has been added');

    }

    public function edit_category($id) {
        $category =  Categories::find($id);
        return view('backend.categories.edit_category', compact('category'));
    }

    public function edit_category_handler(Request $request) {
        $category = Categories::find($request->id);
        $category->category = $request->category;
        $category->save();

        return redirect()->route('categories')->with('message', 'Category has been edited');
    }

    public function delete_category($id) {
        $category = Categories::find($id);
        $category->delete();
        return redirect()->route('categories')->with('message', 'Category has been deleted');
    }

    //products
    public function products() {
        $products = Products::orderBy('name','ASC')->paginate(10);
        return view('backend.products.products', compact('products'));

    }

    public function add_product() {
        $categories = Categories::all();
        return view('backend.products.add_product', compact('categories'));

    }

    public function submit_product(Request $request) {
        $product = new Products;
        $product->categories_id = $request->categories_id;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->sale_price = $request->sale_price;
        $product->quantity = $request->quantity;
        $imageName = uniqid().'.'.$request->image->extension();
        $product->image = 'images/'.$imageName;
        $request->image->move(public_path('images'), $imageName);
        $product->save();

        return redirect()->route('products')->with('message', 'Product has been added');
    }

    public function edit_product($id) {
        $product = Products::find($id);
        $categories = Categories::all();
        return view('backend.products.edit_product', compact('product', 'categories'));
    }

    public function edit_product_handler(Request $request) {
        $product = Products::find($request->id);
        $product->categories_id = $request->categories_id;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->sale_price = $request->sale_price;
        $product->quantity = $request->quantity;
        if($request->image == !NULL) {
            unlink($product->image);
            $imageName = uniqid().'.'.$request->image->extension();
            $product->image = 'images/'.$imageName;
            $request->image->move(public_path('images'), $imageName);
        }
        $product->save();

        return redirect()->route('products')->with('message', 'Product has been edited');
    }

    public function delete_product($id) {
        $product = Products::find($id);
        unlink($product->image);
        $product->delete();
        return redirect()->route('products')->with('message', 'Product has been deleted');
    }

    //orders

    public function orders() {
        $orders = Orders::orderBy('updated_at','DESC')->paginate(10);
        return view('backend.orders.orders', compact('orders'));
    }

    public function single_order($id) {
        $order = Orders::where('id', $id)->first();
        $products = Order_items::where('order_id', $id)->get();
        return view('backend.orders.single_order', compact('order', 'products'));
    }

    public function delete_order($id) {
        $order = Orders::where('id', $id)->first();
        $order->delete();
        return redirect()->route('orders');
    }

    public function order_ready($id) {
        $order = Orders::where('id', $id)->first();
        $order->status = 'Ready';
        $order->save();
        return redirect()->route('orders');
    }

    public function order_delivered($id) {
        $order = Orders::where('id', $id)->first();
        $order->status = 'Delivered';
        $order->save();
        return redirect()->route('orders');
    }



}
