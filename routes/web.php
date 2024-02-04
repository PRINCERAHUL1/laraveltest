<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\TestingController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::controller(PageController::class)->group(function(){

Route::get('/','showHome')->name('home');

Route::get('/users/{id}','showUser')->name('user');

Route::get('/blog','showBlog')->name('blog');

});

Route::get('/test',TestingController::class);
