<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Models\Veriler;
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

Route::get('/',[MainController::class,'index'])->name('deneme');
Route::get('add_text',[MainController::class,'add_text'])->name('add_text');
Route::post('add_text',[MainController::class,'store'])->name('store');
Route::get('/post/{id}/{slug}',[MainController::class,'show'])->name('show');
