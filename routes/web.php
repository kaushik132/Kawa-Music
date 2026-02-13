<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\SitemapController;
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

Route::get('artist/{slug?}',[HomeController::class, 'artist']);
Route::get('blog/{slug?}',[HomeController::class, 'blog']);
Route::get('blog-detail/{slug?}',[HomeController::class, 'blogDetail']);
Route::get('contact',[HomeController::class, 'contact']);
Route::get('privacy-policy',[HomeController::class, 'privacyPolicy']);
Route::get('product/{slug?}',[HomeController::class, 'product']);
Route::get('product-detail/{slug?}',[HomeController::class, 'productDetail']);


// post
Route::post('/contact-submit', [HomeController::class, 'store'])->name('contact.submit');
Route::post('/product-inquiry', [HomeController::class, 'productstore'])->name('inquiry.store');

//sitemap.xml
Route::get('sitemap.xml',[SitemapController::class, 'index']);

