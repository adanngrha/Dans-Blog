<?php

use App\Models\User;
use App\Models\Category;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;

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
        "active" => "Home",
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "active" => "About",
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
        'active' => 'Categories',
        'categories' => Category::all(),
    ]);
});

// single category
Route::get('categories/{category:slug}', function (Category $category) {
    return view('posts', [
        'title' => $category->name,
        'active' => $category->name,
        'posts' => $category->posts,
        'category' => $category->name,
    ]);
});


// Authors
Route::get('/authors', function () {
    return view('authors', [
        'title' => 'Authors',
        'active' => 'Authors',
        'authors' => User::all(),
    ]);
});

Route::get('authors/{author:username}', function (User $author) {
    return view('author', [
        'title' => $author->name,
        'active' => 'Author',
        'author' => $author->name,
        'posts' => $author->posts->load('user','category'),
    ]);
});


Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function () {
        return view('dashboard.index');
    })->middleware('auth');

Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');
