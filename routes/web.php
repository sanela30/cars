<?php
use\App\Car;
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
Route::get('/',function(){

    return view('welcome');
});
Route::get('/cars',['as'=>'all-cars','uses'=> 'CarsController@index']);

Route::get('/cars/{id}',['as'=>'single_car','uses'=> 'CarsController@show']);