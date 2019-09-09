<?php

namespace App\Http\Controllers;

use App\Folio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FolioController extends Controller
{
    /*gets the last folio date_created from online db
    improve this to reflect every change in the table later
    */
    public function getLastDateCreated(){

        $last_folio_date = DB::table('reservationfolioitems')
            ->select('date_created')
            ->orderBy('date_created', 'desc')
            ->take(1)
            ->get();

            return json_encode($last_folio_date);
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
     * @param  \App\Folio  $folio
     * @return \Illuminate\Http\Response
     */
    public function show(Folio $folio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Folio  $folio
     * @return \Illuminate\Http\Response
     */
    public function edit(Folio $folio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Folio  $folio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Folio $folio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Folio  $folio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Folio $folio)
    {
        //
    }
}
