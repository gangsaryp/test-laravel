<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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
    return view('welcome');
});

Route::middleware('auth:api')->get('/user', function(Request $request){
    return $request->user();
});

Route::get('/categories','CategoryController@index');
Route::get('/categories/tambah','CategoryController@tambah');
Route::get('/categories/edit/{id}','CategoryController@edit');
Route::get('/categories/hapus/{id}','CategoryController@delete');
Route::post('/categories/update/{id}','CategoryController@update');
Route::post('/categories/store','CategoryController@store');
Route::get('/categories/cari','CategoryController@cari');
