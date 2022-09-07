<?php

use App\Http\Controllers\PageController;
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
    return view('home');
});

Route::get('/',[PageController::class,'index']);
Route::post('/store',[PageController::class,'store']);
Route::get('/',[PageController::class,'show']);  
Route::get('/edit/{id}',[PageController::class,'editId']);
Route::put('/update/{id}',[PageController::class,'update']);
Route::get('/delete/{id}/{Profile_Img}',[PageController::class,'delete']);