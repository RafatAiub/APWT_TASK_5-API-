<?php

use App\Http\Controllers\ProductController;
use App\Models\Product;
use Database\Seeders\ProductSeeder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("list/{id?}",[ProductController::class,'list']);
Route::get("find/{name?}",[ProductController::class,'find_product']);

Route::post("add",[ProductController::class,'add']);
Route::put("update",[ProductController::class,'update']);
Route::get("search/{name}",[ProductController::class,'search_now']);
