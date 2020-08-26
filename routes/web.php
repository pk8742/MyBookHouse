<?php

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
/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/',"BookHouseController@index");
Route::get('/file-upload', 'BookHouseController@file_upload_page');
Route::post('/file-upload', 'BookHouseController@store');
Route::get('/view-uploads', 'BookHouseController@viewUploads');
