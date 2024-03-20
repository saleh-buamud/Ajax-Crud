<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

Route::get('/', function ($d) {
    return view('product');
});
Route::get('/',[ProductController::class,'index'])->name('product.index');
Route::Post('/add-product',[ProductController::class,'addProduct'])->name('product.addProduct');
Route::get('about',function(){
    return 'about';
});