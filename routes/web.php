<?php

use App\Models\User;
use App\Models\Post;
use App\Models\Category;
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
    return view('blog', [
        'posts' => Post::latest('id')->get()
    ]);
});

Route::get("/posts/{post:id}", function (Post $post){

    return view('post', [
        'post' => $post
    ]);
});

Route::get("/categories/{category}", function (Category $category) {
    return view('blog', [
        'posts' => $category->posts
    ]);
});

Route::get("/authors/{author}", function (User $author) {
    return view('blog', [
        'posts' => $author->posts
    ]);
});
