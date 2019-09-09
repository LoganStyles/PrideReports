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

// Route::get('reservation_last_date','ReservationController@getLastDateCreated');
// Route::get('folio_last_date','FolioController@getLastDateCreated');
// Route::get('price_last_id','ReservationPriceController@getLastID');
// Route::get('roomtype_last_id','RoomTypeController@getLastID');
// Route::get('room_last_id','RoomController@getLastID');

// Route::post('save_reservation_items','ReservationController@newItems');

Route::group(['middleware' => 'auth:api'], function() {
    Route::get('reservationitems', 'ReservationItemController@index');
    Route::get('reservationitems/{reservationitem}', 'ReservationItemController@show');
    Route::post('reservationitems', 'ReservationItemController@store');
    Route::put('reservationitems/{reservationitem}', 'ReservationItemController@update');
    Route::delete('reservationitems/{reservationitem}', 'ReservationItemController@delete');
});

Route::post('register', 'Auth\RegisterController@register');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout');

// Route::group(['middleware' => 'auth:api'], function() {
//     Route::get('reservationitems', 'ReservationItemController@index');
//     Route::get('articles/{article}', 'ArticleController@show');
//     Route::post('articles', 'ArticleController@store');
//     Route::put('articles/{article}', 'ArticleController@update');
//     Route::delete('articles/{article}', 'ArticleController@delete');
// });
