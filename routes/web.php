<?php

use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\User;
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
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Jerry",
        "email" => "jerry@gmail.com",
        "img" => "jerry.jpg"
    ]);
});

Route::get('/posts', [PostController::class, 'index']);

// postingan
Route::get('post/{post:slug}', [PostController::class, 'show']);

// tampilkan semua kategori
Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Post Categories',
        'active' => "categories",
        'categories' => Category::all()
    ]);
});


Route::get('/categories/{category:slug}', function (Category $category) {
    return view('posts', [
        'title' => "Post By Category : . $category->name",
        'active' => "categories",
        'posts' => $category->posts->load('category', 'author'),
    ]);
});

Route::get('/authors/{author:username}', function (User $author) {
    return view('posts', [
        'title' => "Post By Author : $author->name",
        'posts' => $author->posts->load('category', 'author')
    ]);
});