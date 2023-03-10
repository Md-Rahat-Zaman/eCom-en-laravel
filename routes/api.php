<?php

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/users/{name}',function($name){
    return "hi" .$name;
});

Route::get('/products/{id?}',function($id = null){
    return 'product id is '.$id;
});
Route::match(['get','post'],'/students',function(Request $req)
{
    return 'Requested method is '. $req->method();
});
Route::any('/posts',function(Request $req)
{
    return 'Requested method is'. $req->method();
});