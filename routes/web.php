<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;


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

Route::get('/',[SiteController::class,'index']);
Route::get('/profile',[SiteController::class,'profile']);
Route::get('/list',[SiteController::class,'list']);

Route::get('/login','App\Http\Controllers\AuthController@login')->name('login');
Route::post('/postlogin','App\Http\Controllers\AuthController@postlogin');
Route::get('/logout','App\Http\Controllers\AuthController@logout');

Route::group(['middleware' => ['auth','checkRole:kasun']],function(){
    Route::get('/homes','App\Http\Controllers\HomeController@index')->middleware('auth');
    Route::post('/homes/create','App\Http\Controllers\HomeController@create')->middleware('auth');
    Route::get('/homes/{id}/delete','App\Http\Controllers\HomeController@delete')->middleware('auth');
    Route::get('/homes/{id}/gambar','App\Http\Controllers\HomeController@gambar')->middleware('auth');
    Route::get('/homes/{id}/edit_author','App\Http\Controllers\HomeController@edit_author')->middleware('auth');
    Route::post('/homes/{id}/update_author','App\Http\Controllers\HomeController@update_author')->middleware('auth');
    
    Route::get('/warga','App\Http\Controllers\WargaController@index')->middleware('auth');

    Route::get('/warga/rt06','App\Http\Controllers\WargaController@rt06')->middleware('auth');
    Route::get('/warga/rt03','App\Http\Controllers\WargaController@rt03')->middleware('auth');
    Route::get('/warga/rt02','App\Http\Controllers\WargaController@rt02')->middleware('auth');
    Route::get('/warga/rt04','App\Http\Controllers\WargaController@rt04')->middleware('auth');

    Route::post('/warga/create','App\Http\Controllers\WargaController@create')->middleware('auth');
    Route::get('/warga/{id}/edit','App\Http\Controllers\WargaController@edit')->middleware('auth');
    Route::post('/warga/{id}/update','App\Http\Controllers\WargaController@update')->middleware('auth');
    Route::get('/warga/{id}/delete','App\Http\Controllers\WargaController@delete')->middleware('auth');
    Route::get('/warga/{id}/avatar','App\Http\Controllers\WargaController@avatar')->middleware('auth');
});

Route::group(['middleware' => ['auth','checkRole:RT_06,kasun']],function(){
    Route::get('/homes','App\Http\Controllers\HomeController@index')->middleware('auth');
    Route::post('/homes/create','App\Http\Controllers\HomeController@create')->middleware('auth');
    Route::get('/homes/{id}/delete','App\Http\Controllers\HomeController@delete')->middleware('auth');
    Route::get('/homes/{id}/gambar','App\Http\Controllers\HomeController@gambar')->middleware('auth');
    Route::get('/homes/{id}/edit_author','App\Http\Controllers\HomeController@edit_author')->middleware('auth');
    Route::post('/homes/{id}/update_author','App\Http\Controllers\HomeController@update_author')->middleware('auth');
    Route::get('/warga/rt06','App\Http\Controllers\WargaController@rt06')->middleware('auth');
    Route::post('/warga/create_rt06','App\Http\Controllers\WargaController@create_rt06')->middleware('auth');
    Route::get('/warga/{id}/edit_rt06','App\Http\Controllers\WargaController@edit_rt06')->middleware('auth');
    Route::post('/warga/{id}/update_rt06','App\Http\Controllers\WargaController@update_rt06')->middleware('auth');
    Route::get('/warga/{id}/delete_rt06','App\Http\Controllers\WargaController@delete_rt06')->middleware('auth');
});