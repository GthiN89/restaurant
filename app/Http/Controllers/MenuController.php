<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class MenuController extends Controller
{
    // restaurant menu Controller
    //home variable is because of template
    public function menu() {
        $home = 0;
        $categories = Categories::all();
        $products_all = Products::all();
        $contact = DB::table('contact')->get();
        $social = DB::table('social')->get();
        $hours = DB::table('hours')->get();
        $about = DB::table('about')->first();
        return view('menu', compact('categories', 'products_all', 'home', 'contact', 'social', 'hours'));
    }

    public function menu_filter($category) {
        $home = 0;
        $categories = Categories::all();
        $category_db = Categories::where('category', $category)->first();
        $category_id = $category_db->id;
        $products_all = Products::where('categories_id', $category_id)->get();
        $contact = DB::table('contact')->get();
        $social = DB::table('social')->get();
        $hours = DB::table('hours')->get();
        $about = DB::table('about')->first();
        return view('menu', compact('categories', 'products_all', 'home', 'contact', 'social', 'hours'));

    }
}
