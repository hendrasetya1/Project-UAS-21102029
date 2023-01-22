<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\project01;
use App\Http\Controllers\arduino;

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

Route::get('/', [project01::class,'home']);
Route::get('/code',[project01::class,'code']);
Route::get('/komponen',  [project01::class,'komponen']);
Route::resource('/admin',arduino::class);