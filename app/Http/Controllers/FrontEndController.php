<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Categories;
use App\Models\Products;

class FrontEndController extends Controller
{
    // restaurant menu and cart has its own Controller
    //home variable is because of template

    public function about() {
        $home = 0;
        $contact = DB::table('contact')->get();
        $social = DB::table('social')->get();
        $hours = DB::table('hours')->get();
        $about = DB::table('about')->first();
        return view('about', compact('about', 'home', 'contact', 'social', 'hours'));
    }

    public function home() {
        $home = 1;
        $about = DB::table('about')->first();
        $slides = DB::table('slider')->get();
        $reviews = DB::table('reviews')->get();
        $contact = DB::table('contact')->get();
        $social = DB::table('social')->get();
        $hours = DB::table('hours')->get();
        $categories = Categories::all();
        $products_all = Products::all()->take(10);
        return view('welcome', compact('about','categories', 'products_all', 'slides', 'home', 'reviews', 'contact', 'social', 'hours'));
    }


}
