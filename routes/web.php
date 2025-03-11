<?php

use Illuminate\Support\Facades\Route;

$ninjaControllerRoute = 'App\Http\Controllers\NinjaController@';

// Home Controller
Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home.index');

Route::get('/about', function () {
    $data1 = 'About us - Online Store';
    $data2 = 'About us';
    $description = 'This is an about page ...';
    $author = 'Developed by: Santiago Idárraga Ceballos';

    return view('home.about')->with('title', $data1)
        ->with('subtitle', $data2)
        ->with('description', $description)
        ->with('author', $author);
})->name('home.about');

Route::get('/contact', 'App\Http\Controllers\HomeController@contact')->name('home.contact');

// Products Controller
Route::get('/products', 'App\Http\Controllers\ProductController@index')->name('product.index');
Route::get('/products/create', 'App\Http\Controllers\ProductController@create')->name('product.create');
Route::post('/products/save', 'App\Http\Controllers\ProductController@save')->name('product.save');
Route::get('/products/{id}', 'App\Http\Controllers\ProductController@show')->name('product.show');

// Cart Controller
Route::get('/cart', 'App\Http\Controllers\CartController@index')->name('cart.index');
Route::get('/cart/add/{id}', 'App\Http\Controllers\CartController@add')->name('cart.add');
Route::get('/cart/removeAll/', 'App\Http\Controllers\CartController@removeAll')->name('cart.removeAll');

Auth::routes();

// Image Controller (DI)
Route::get('/image', 'App\Http\Controllers\ImageController@index')->name('image.index');
Route::post('/image/save', 'App\Http\Controllers\ImageController@save')->name('image.save');

// Image Controller (NDI)
Route::get('/image-not-di', 'App\Http\Controllers\ImageNotDIController@index')->name('imagenotdi.index');
Route::post('/image-not-di/save', 'App\Http\Controllers\ImageNotDIController@save')->name('imagenotdi.save');

// Ninja Controller (1st Exam)
Route::get('/ninja', $ninjaControllerRoute.'index')->name('ninja.index');
Route::get('/ninja/create', $ninjaControllerRoute.'create')->name('ninja.create');
Route::get('/ninja/stats', $ninjaControllerRoute.'stats')->name('ninja.stats');
Route::post('/ninja/save', $ninjaControllerRoute.'save')->name('ninja.save');
Route::get('/ninja/{id}', $ninjaControllerRoute.'show')->name('ninja.show');
