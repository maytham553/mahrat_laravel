<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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



Route::POST('/addUser' , [UserController::class, 'register']);
Route::POST('/login' , [UserController::class, 'login']);


Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::POST('/test', function (Request $request) {
        return 'hellow wollrd';
    });
    Route::post('/logout', [UserController::class, 'logout']);
    Route::get('/users', [UserController::class, 'users']);

});
