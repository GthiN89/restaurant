<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SettingsController extends Controller
{

    //admin panel settings Controller, contains: about, slider, reviews (from customers), contact, opening hours, social media

    //About
    public function about() {
        $about = DB::table('about')->first();
        return view('backend.settings.about', compact('about'));
    }

    public function about_submit(Request $request) {
        $header = $request->header;
        $paragraph = $request->paragraph;
        $about = DB::table('about')->where('id', 1);
        $about->update([
            'header' => $header,
            'paragraph' => $paragraph,
        ]);
        return redirect()->route('about_settings');
    }

    //Slider
    public function slider() {
        $slides = DB::table('slider')->get();
        return view('backend.settings.slider', compact('slides'));
    }

    public function add_slider() {
        return view('backend.settings.add_slider');
    }

    public function slider_submit(Request $request) {
        $header = $request->header;
        $paragraph = $request->paragraph;
        DB::table('slider')->insert([
                'header' => $header,
                'paragraph' => $paragraph,
            ]);
        return redirect()->route('slider');
    }

    public function edit_slider($id) {
        $slide_array = DB::table('slider')->where('id', $id)->get();
        $slide = $slide_array[0];
        return view('backend.settings.edit_slider', compact('slide'));
    }

    public function edit_slider_submit(Request $request) {
        $id = $request->id;
        $header = $request->header;
        $paragraph = $request->paragraph;
        $slider = DB::table('slider')->where('id', $id);
        $slider->update([
            'header' => $header,
            'paragraph' => $paragraph,
        ]);
        return redirect()->route('slider');
    }

    public function delete_slider($id) {
        DB::table('slider')->where('id', $id)->delete();
        return redirect()->route('slider');
    }

    //reviews from customer (customer feedback)
    public function reviews() {
        $reviews = DB::table('reviews')->get();
        return view('backend.settings.reviews', compact('reviews'));
    }

    public function add_review() {
        return view('backend.settings.add_review');
    }

    public function review_submit(Request $request) {
        $name = $request->name;
        $title = $request->title;
        $paragraph = $request->paragraph;
        $imageName = uniqid().'.'.$request->image->extension();
        $image = 'images/'.$imageName;
        $request->image->move(public_path('images'), $imageName);

        DB::table('reviews')->insert([
            'paragraph' => $paragraph,
            'name' => $name,
            'title' => $title,
            'image' => $image,
        ]);

        return redirect()->route('reviews');
    }

    public function edit_review($id) {
        $review_array = DB::table('reviews')->where('id', $id)->get();
        $review = $review_array[0];
        return view('backend.settings.edit_review', compact('review'));
    }

    public function edit_review_submit(Request $request) {
        $review = DB::table('reviews')->where('id', $request->id)->first();
        $name = $request->name;
        $title = $request->title;
        $paragraph = $request->paragraph;
        $image = $review->image;
        if($request->image == !NULL){
            unlink($review->image);
            $imageName = uniqid().'.'.$request->image->extension();
            $image = 'images/'.$imageName;
            $request->image->move(public_path('images'), $imageName);
        }
        $review = DB::table('reviews')->where('id', $request->id);
        $review->update([
            'paragraph' => $paragraph,
            'name' => $name,
            'title' => $title,
            'image' => $image,
        ]);

        return redirect()->route('reviews');
    }

    public function delete_review($id) {
        DB::table('reviews')->where('id', $id)->delete();
        return redirect()->route('reviews');
    }

    //contact
    public function contact() {
        $contact = DB::table('contact')->first();
        return view('backend.settings.contact', compact('contact'));
    }

    public function contact_submit(Request $request) {
        $location = $request->location;
        $phone = $request->phone;
        $email = $request->email;
        $about = DB::table('contact')->where('id', 1);
        $about->update([
            'location' => $location,
            'phone' => $phone,
            'email' => $email,
        ]);
        return redirect()->route('contact_settings');
    }

    //opening hours

    public function hours() {
        $hours = DB::table('hours')->first();
        return view('backend.settings.hours', compact('hours'));
    }

    public function hours_submit(Request $request) {
        $days = $request->days;
        $hours = $request->hours;
        $open_hours = DB::table('hours')->where('id', 1);
        $open_hours->update([
            'days' => $days,
            'hours' => $hours,
        ]);
        return redirect()->route('hours_settings');
    }

    //social
    public function social() {
        $social = DB::table('social')->first();
        return view('backend.settings.social', compact('social'));
    }

    public function social_submit(Request $request) {
        $paragraph = $request->paragraph;
        $facebook = $request->facebook;
        $twitter = $request->twitter;
        $linkedin = $request->linkedin;
        $instagram = $request->instagram;
        $pinterest = $request->pinterest;

        $social = DB::table('social')->where('id', 1);
        $social->update([
            'paragraph' => $paragraph,
            'facebook' => $facebook,
            'twitter' => $twitter,
            'linkedin' => $linkedin,
            'instagram' => $instagram,
            'pinterest' => $pinterest,
        ]);
        return redirect()->route('social_settings');
    }


}
