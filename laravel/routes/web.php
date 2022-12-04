<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\KalkulatorController;
use App\Http\Controllers\SuhuController;
use App\Http\Controllers\ZodiacController;
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
    return view('tugas');
});

Route::get( 'zodiac' , [ZodiacController::class, 'index'] );
Route::post( 'zodiac', [ZodiacController::class, 'zodiac'] );

Route::get( 'kalkulator' , [KalkulatorController::class, 'index']);
Route::post( 'kalkulator' , [KalkulatorController::class, 'kalkulator']);


Route::get( 'suhu' , [SuhuController::class, 'index']);
Route::post( 'suhu' , [SuhuController::class, 'suhu']);
// Route::get('/',[FrontController::class,'index']);
// Route::get('show/{id}',[FrontController::class,'show']);
// Route::get('register',[FrontController::class,'register']);

// Route::get('login',[FrontController::class,'login']);
// Route::get('logout',[FrontController::class,'logout']);

// Route::post('postregister',[FrontController::class,'store']);
// Route::post('postlogin',[FrontController::class,'postlogin']);

// Route::get('beli/{idmenu}',[CartController::class,'beli']);