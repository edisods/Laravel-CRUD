<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TagController;



Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

// Page routes

Route::get('/', function() {
    return view('website.home');
})->name('website');

Route::get('/about', function() {
    return view('website.about');
});

Route::get('/category', function() {
    return view('website.category');
});

Route::get('/contact', function() {
    return view('website.contact');
});

Route::get('/post', function() {
    return view('website.post');
});

// Admin panel routes
Route::prefix('admin')->name('admin.')->group(function() {
    Route::get('/', [SiteController::class, 'admin_index'])->name('index');

    Route::resource('category', 'CategoryController');
    Route::resource('tag', 'TagController');
    Route::resource('post', 'PostController');

});










