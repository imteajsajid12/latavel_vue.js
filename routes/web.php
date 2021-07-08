<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CatagoryController;
use App\Http\Controllers\HomeController;

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
//     return view('');
// });
Route::get('/home', [HomeController::class, 'index']);
Route::get('/', [HomeController::class, 'index']);
Route::get('/Sell', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'index']);
Route::get('/stock', [HomeController::class, 'index']);
Route::get('/coustomer', [HomeController::class, 'index']);


Auth::routes();

//Admin
Route::get('/Admin/home', [HomeController::class, 'index']);
