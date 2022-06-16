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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::group([
    'prefix' => 'routes'
], function(){
    Route::get('/', 'RouteController@Index');
});
Route::group([
    'prefix' => 'users'
], function(){
    Route::get('/reservations', 'UserController@UserReservations');
});
Route::group([
    'prefix' => 'reservations'
], function(){
    Route::get('/get_by_user_id/{user_id}', 'ResevationController@GetReservationsByUserId');
});