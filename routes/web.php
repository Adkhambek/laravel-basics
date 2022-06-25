<?php

use App\Models\Post;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/laravel', function () {
   return view('laravel');
});

Route::get("/blog", function () {
    $posts = Post::findAll();
    return view('blog', [
        'posts' => $posts
    ]);
});

Route::get("/post/{id}", function ($id){

    $post = Post::find($id);
    return view('post', [
        'post' => $post
    ]);
})->whereNumber('id');

Route::get('/hello', function () {
    return "Hello World";
});

Route::get("/user", function () {
    return ["username" => "Adham", "age" => 23, "single" => true];
});
