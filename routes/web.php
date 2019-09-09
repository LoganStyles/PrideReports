<?php

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

Route::get('/{generic}', 'ReportController@showPage');//display a page

Route::post('report-arrivals', 'ReportController@getArrivals');
Route::post('report-departures', 'ReportController@getDepartures');
Route::post('report-stayingGuests', 'ReportController@getStayingGuests');
// Route::post('report-departures', 'ReportController@getDepartures');
