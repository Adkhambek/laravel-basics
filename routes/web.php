<?php

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

    return view('blog');
});

Route::get("/post/{id}", function ($id){
    if(!is_numeric($id)) return redirect("/");
    $posts = json_decode(file_get_contents(__DIR__ . "\posts.json"), true);
    $key = array_search(+$id, array_map(function ($post) {return $post["id"];}, $posts));
    if($key === false) return redirect("/");
    return view('post', [
        'post' => $posts[$key]
    ]);
});

Route::get('/hello', function () {
    return "Hello World";
});

Route::get("/user", function () {
    return ["username" => "Adham", "age" => 23, "single" => true];
});
