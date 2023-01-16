<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about',[
        'title' => 'About',
        'name' => 'Nurhalilis Saputri Enal',
        'email' => 'nurhalilissaputri26@icloud.com',
        'image' => 'lilisss.jpg'
    ]);
});

Route::get('posts', [PostController::class, 'index']);


Route::get('/posts', function () {
    return view('/post');
});


Route::get('/posts{slug}', function ($slug){
     return view('post', [
        "title" => "Single Post",
        "post" => Post::find($slug)
    ]);
});

Route::get('/login', [LoginController::class, 'index']);
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);