<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/users/{name?}', function($name = null){
    return '안녕,'. $name;
})->where('name','[a-zA-Z0-9]+');


Route::get('/products/{id}', function($id =null){
    return '제품 ID : '. $id;
})->where('id','[0-9]+');