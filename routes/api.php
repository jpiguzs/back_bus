<?php

use Illuminate\Http\Request;

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

// Si la capacidad de la ruta no está completamente ocupada.
Route::group([
    'prefix' => 'services'
], function(){
    Route::get('/', 'ServicesController@GetAvailabilityByRouteId');
});
// Días del calendario que el usuario posee reservados, los días reservados pueden
// conseguirse en formato de rango como tambien días sueltos
Route::group([
    'prefix' => 'reservations'
], function(){
    Route::get('/{user_id}', 'ResevationController@GetReservationsByUserId');
});
// Mostrar los días de calendario no disponibles
Route::group([
    'prefix' => 'disabled_days'
], function(){
    Route::get('/', 'CalendarDaysDisabledController@GetDaysByRouteId');
});