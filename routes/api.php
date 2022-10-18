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

Route::get('/drivers','App\Http\Controllers\DriverController@index'); //get all drivers

Route::get('/drivers/available', 'App\Http\Controllers\DriverController@getAvailableDrivers'); // get all available drivers

Route::get('/vehicles','App\Http\Controllers\VehicleController@index'); //get all vehicles

Route::get('/vehicles/available','App\Http\Controllers\VehicleController@getAvailableVehicles'); //get all vehicles

Route::get('/assigned', 'App\Http\Controllers\VehicleDriverController@index'); //get all assignmemts

Route::post('/assign', 'App\Http\Controllers\VehicleDriverController@setDriverToVehicle'); //new assignment

Route::delete('/assign/remove/{id}', 'App\Http\Controllers\VehicleDriverController@remove'); //remove assignment