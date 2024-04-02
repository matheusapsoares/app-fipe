<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\VehiclesController@list')->name('vehicles.list');;

Route::get('/vehicles', 'App\Http\Controllers\VehiclesController@create')->name('vehicles.create');

Route::post('/vehicles', 'App\Http\Controllers\VehiclesController@store')->name('vehicles.store');

Route::get('/vehicles/{id}', 'App\Http\Controllers\VehiclesController@edit')->name('vehicles.edit');

Route::post('/vehicles-update', 'App\Http\Controllers\VehiclesController@update')->name('vehicles.update');

Route::delete('/vehicles-delete/{id}', 'App\Http\Controllers\VehiclesController@delete')->name('vehicles.delete');
