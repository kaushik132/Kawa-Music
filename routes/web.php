<?php

use App\Http\Controllers\HomeController;
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

Route::get('/',[HomeController::class, 'index']);

Route::get('artist',[HomeController::class, 'artist']);
Route::get('blog',[HomeController::class, 'blog']);
Route::get('blog-detail',[HomeController::class, 'blogDetail']);
Route::get('contact',[HomeController::class, 'contact']);
Route::get('privacy-policy',[HomeController::class, 'privacyPolicy']);
Route::get('product',[HomeController::class, 'product']);
Route::get('product-detail',[HomeController::class, 'productDetail']);



