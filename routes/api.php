<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatagoryController;
use App\Http\Controllers\HomeController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
//login
// Route::post('/data',[Auth\LoginController::class, 'showLoginForm']);
// //registacion
// Route::post('/data',[CatagoryController::class, 'registation']);
///
Route::apiresource('/catagory',  CatagoryController::class, );
// Route::apiresource('/catagory',  CatagoryController::class, );
Route::post('/catagory', [CatagoryController::class, 'store'])->name('catagory');
Route::get('/show_catagory', [CatagoryController::class, 'Show1']);
Route::post('/catagory1/{catagory}',[CatagoryController::class, 'destroy1']);
Route::get('/catagory/edit/{name}',[CatagoryController::class, 'kk']);
Route::post('/catagory/{catagory}/update',[CatagoryController::class, 'update']);
Route::get('/catagory/{name}/edit',[CatagoryController::class, 'edit_kk']);
Route::post('/data',[CatagoryController::class, 'save1']);
// Route::post('/login',[HomeController::class, 'authenticate']);
