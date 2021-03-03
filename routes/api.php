<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatagoryController;

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
// Route::resource('catagory','HomeController');
// Route::post('/players/{id}/answers', 'CatagoryController@answer');
Route::apiresource('/catagory',  CatagoryController::class, );
Route::get('/catagory/{catagory}/edit',[CatagoryController::class, 'edit']);
Route::post('/catagory/{catagory}/update',[CatagoryController::class, 'update']);

  