<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use function Ramsey\Uuid\v1;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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
        "title" => "Home",
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Adan Nugraha",
        "email" => "adangrha@email.com",
        "image" => "azuki2.png"
    ]);
});


Route::get('/blogs', [PostController::class, 'index']);

// single post page
Route::get('blog/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function() {
    return view('categories', [
        'title' => 'Categories',
        'categories' => Category::all(),
    ]);
});

// single category
Route::get('categories/{category:slug}', function (Category $category) {
    return view('category', [
        'title' => $category->name,
        'posts' => $category->posts,
        'category' => $category->name,
    ]);
});


// Authors
Route::get('/authors', function () {
    return view('authors', [
        'title' => 'Authors',
        'authors' => User::all(),
    ]);
});

Route::get('authors/{author:username}', function (User $author) {
    return view('author', [
        'title' => 'Author',
        'author' => $author->name,
        'posts' => $author->posts->load('user','category'),
    ]);
});
