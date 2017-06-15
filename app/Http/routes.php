<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('vehicles.index');
})->name('home');


Route::get('/search',[
    'uses' => 'VehicleController@searchCar',
    'as' => 'vehicles.search'
]);

Route::get('/stock',  [
    'uses'=>'VehicleController@getAllCars',
    'as'=>'stock'
]);

Route::get('/itemView/{id}/',[
   'uses'=>'VehicleController@getProduct',
    'as'=>'showItem'
]);


Route::get('/upload', function () {
    return view('vehicles.upload');
});

Route::post('/stock',[
   'uses' => 'VehicleController@viewCars',
    'as' => 'vehicles.results'
]);


Route::post('/search',[
    'uses'=>'VehicleController@searchCar',
    'as' =>'vehicles.search'
]);