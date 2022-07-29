<?php

use App\Http\Controllers\AdminPanelController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\SettingsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// contains FrontEnd, categories, products, cart, orders admin, menu (restaurant menu), settings: about, slider, reviews (from customers)
// contact,  hours and social media

//FrontEnd


Route::get('/', [FrontEndController::class, 'home'])->name('home');

Route::get('/about', [FrontEndController::class, 'about'])->name('about');


Route::get('/admin', [AdminPanelController::class, 'index'])->middleware(['auth'])->name('admin');

//categories

Route::get('/admin/categories', [AdminPanelController::class, 'categories'])->middleware(['auth'])->name('categories');

Route::get('/admin/categories/add', [AdminPanelController::class, 'add_category'])->middleware(['auth'])->name('add_category');

Route::post('/admin/categories/submit', [AdminPanelController::class, 'submit_category'])->middleware(['auth'])->name('submit_category');

Route::get('/admin/categories/edit/{id}', [AdminPanelController::class, 'edit_category'])->middleware(['auth'])->name('edit_category');

Route::post('/admin/categories/edit', [AdminPanelController::class, 'edit_category_handler'])->middleware(['auth'])->name('edit_category_handler');

Route::get('/admin/categories/delete/{id}', [AdminPanelController::class, 'delete_category'])->middleware(['auth'])->name('delete_category');

//products

Route::get('/admin/products', [AdminPanelController::class, 'products'])->middleware(['auth'])->name('products');

Route::get('/admin/products/add', [AdminPanelController::class, 'add_product'])->middleware(['auth'])->name('add_product');

Route::post('/admin/products/submit', [AdminPanelController::class, 'submit_product'])->middleware(['auth'])->name('submit_product');

Route::get('/admin/products/edit/{id}', [AdminPanelController::class, 'edit_product'])->middleware(['auth'])->name('edit_product');

Route::post('/admin/product/edit', [AdminPanelController::class, 'edit_product_handler'])->middleware(['auth'])->name('edit_product_handler');

Route::get('/admin/products/delete/{id}', [AdminPanelController::class, 'delete_product'])->middleware(['auth'])->name('delete_product');

//cart

Route::get('cart', [CartController::class, 'ShowCart'])->name('cart');

Route::post('add_to_cart', [CartController::class, 'AddToCart'])->name('add_to_cart');

Route::post('remove_from_cart', [CartController::class, 'RemoveFromCart'])->name('remove_from_cart');

Route::post('edit_product_quantity', [CartController::class, 'EditProductQuantity'])->name('edit_product_quantity');

Route::get('checkout', [CartController::class, 'checkout'])->name('checkout');

Route::post('place_order', [CartController::class, 'place_order'])->name('place_order');

Route::get('order', [CartController::class, 'order'])->name('order');



//orders admin

Route::get('/admin/orders', [AdminPanelController::class, 'orders'])->middleware(['auth'])->name('orders');

Route::get('/admin/orders/{id}', [AdminPanelController::class, 'single_order'])->middleware(['auth'])->name('single_order');

Route::get('/admin/orders/delete/{id}', [AdminPanelController::class, 'delete_order'])->middleware(['auth'])->name('delete_order');

Route::get('/admin/orders/status/ready/{id}', [AdminPanelController::class, 'order_ready'])->middleware(['auth'])->name('order_ready');

Route::get('/admin/orders/status/delivered/{id}', [AdminPanelController::class, 'order_delivered'])->middleware(['auth'])->name('order_delivered');

//menu

Route::get('menu', [MenuController::class, 'menu'])->name('menu');

Route::get('/menu/{category}', [MenuController::class, 'menu_filter'])->name('menu_filter');

// settings

Route::get('admin/about', [SettingsController::class, 'about'])->name('about_settings');

Route::post('admin/about_submit', [SettingsController::class, 'about_submit'])->name('about_submit');

//slider

Route::get('admin/slider', [SettingsController::class, 'slider'])->name('slider');

Route::get('admin/slider/add', [SettingsController::class, 'add_slider'])->name('add_slider');

Route::post('admin/slider/submit', [SettingsController::class, 'slider_submit'])->name('slider_submit');

Route::get('admin/slider/edit/{id}', [SettingsController::class, 'edit_slider'])->name('edit_slider');

Route::post('admin/slider/edit/submit', [SettingsController::class, 'edit_slider_submit'])->name('edit_slider_submit');

Route::get('admin/slider/delete/{id}', [SettingsController::class, 'delete_slider'])->name('delete_slider');

//reviews

Route::get('admin/reviews', [SettingsController::class, 'reviews'])->name('reviews');

Route::get('admin/reviews/add', [SettingsController::class, 'add_review'])->name('add_review');

Route::post('admin/reviews/submit', [SettingsController::class, 'review_submit'])->name('review_submit');

Route::get('admin/reviews/edit/{id}', [SettingsController::class, 'edit_review'])->name('edit_review');

Route::post('admin/reviews/edit/submit', [SettingsController::class, 'edit_review_submit'])->name('edit_review_submit');

Route::get('admin/reviews/delete/{id}', [SettingsController::class, 'delete_review'])->name('delete_review');

//contact

Route::get('admin/contact', [SettingsController::class, 'contact'])->name('contact_settings');

Route::post('admin/contact/submit', [SettingsController::class, 'contact_submit'])->name('contact_submit');

//hours

Route::get('admin/hours', [SettingsController::class, 'hours'])->name('hours_settings');

Route::post('admin/hours/submit', [SettingsController::class, 'hours_submit'])->name('hours_submit');

//social

Route::get('admin/social', [SettingsController::class, 'social'])->name('social_settings');

Route::post('admin/social/submit', [SettingsController::class, 'social_submit'])->name('social_submit');


require __DIR__.'/auth.php';




