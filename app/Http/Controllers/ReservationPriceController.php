<?php

namespace App\Http\Controllers;

use App\ReservationPrice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReservationPriceController extends Controller
{
    /*gets the last price id from online db
    improve this to reflect every change in the table later
    */
    public function getLastID(){

        $last_reservation_priceid = DB::table('reservationpriceitems')
            ->select('ID')
            ->orderBy('ID', 'desc')
            ->take(1)
            ->get();

            return json_encode($last_reservation_priceid);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ReservationPrice  $reservationPrice
     * @return \Illuminate\Http\Response
     */
    public function show(ReservationPrice $reservationPrice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ReservationPrice  $reservationPrice
     * @return \Illuminate\Http\Response
     */
    public function edit(ReservationPrice $reservationPrice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ReservationPrice  $reservationPrice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ReservationPrice $reservationPrice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ReservationPrice  $reservationPrice
     * @return \Illuminate\Http\Response
     */
    public function destroy(ReservationPrice $reservationPrice)
    {
        //
    }
}
