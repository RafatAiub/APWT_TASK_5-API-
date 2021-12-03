<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use Illuminate\Contracts\Session;
use Illuminate\Contracts\Request;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get("/users",function(){
//     return 'Hi rafat';
// });

Route::get("/logout",function(){
    session()->forget('user');
    return redirect('/');
});


Route::view('/login', 'login');
//Route::get("/login",[UserController::class,'login']);
Route::post("/login",[UserController::class,'login']);
//home page e_commerce
Route::get("/",[ProductController::class,'index']);

Route::get("/detail/{id}",[ProductController::class,'detail']);
Route::view('/detail', 'detail');

Route::get("/search",[ProductController::class,'search']);

Route::post("add_to_cart",[ProductController::class,'addToCart']);
Route::get("cartlist",[ProductController::class,'cartlist']);

