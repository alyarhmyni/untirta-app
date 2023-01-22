<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BookController;

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

//Route::get('/home', function () {
//    return view('home');
//});

Route::get('/home/{name}',[HomeController::class,'home']);
Route::get('/book/insert',[BookController::class,'insert']);
Route::get('/book/insert-orm',[BookController::class,'insertOrm']);

Route::get('/belajar', function () {
    echo'<h1>Hello Untirta</h1>';
    echo '<p>Sedang Belajar Laravel</p>';
});

Route::get('/name/{name}', function ($name) {
    return "Aku adalah $name";
});

Route::get('/book/insert',[BookController::class, 'insert']);
Route::get('/book/insert-orm',[BookController::class,'insertOrm']);
