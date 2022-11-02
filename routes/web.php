<?php

use App\Http\Controllers\PostController;
use App\Models\Categori;
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
    return view('home',[
        "title" => "home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "about",
        "name" => "edy Saputra",
        "email" => "edy.basqoro@gmail.com",
        "images" => "kartar.jpeg"
    ]);
});
 
Route::get('/posts', [PostController::class, 'index']); 

//halaman single post
Route::get('post/{posts:slug}', [PostController::class, 'show']);

Route::get('/categories/{categori:slug}', function(Categori $categori)
    {
        return view('categori',[
            'title' => $categori->name,
            'posts' => $categori->posts,
            'categori' => $categori->name
        ]);
    });