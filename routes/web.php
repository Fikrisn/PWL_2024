<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//praktikum 1

Route::get('/hello', [WelcomeController::class,'hello']);

Route::get('/hello', [PageController::class,'hello']);

Route::get('/index', [PageController::class, 'index']);

Route::get('/welcome', [HomeController::class, 'welcome']);

Route::get('/about', [PageController::class, 'about']);

Route::get('/about', [AboutController::class, 'about']);

Route::get('/user/{name}', function ($name) {
    return 'fikri '.$name;
});

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});

Route::get('/articles/{id}', [PageController::class, 'articles']);

Route::get('/article', [ArticleController::class, 'article']);

Route::get('/user/{name?}', function ($name=null) {
    return 'Fikri'.$name;
});

Route::get('/user/{name?}', function ($name='john'){
    return 'Nama Saya '.$name;
});

//praktikum 2
Route::resource('photos', PhotoController::class);

Route::resource('photos', PhotoController::class)->only([
    'index', 'show'
]);

Route::resource('photos', PhotoController::class)->except([
    'create', 'store', 'update', 'destroy'
]);