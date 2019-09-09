<?php

namespace App\Http\Controllers;

use App\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    public function showPage($page = 'index', $sub_item = NULL, $data = []) {

        $path = '/templates/' . $page;
        
        return view($path, [
            'data' => $data,
            'page_name' => $page
        ]);
    }

    /*get arrival reports*/
    public function getArrivals(Request $request){
        $this->validate($request, [
            'dateFrom' => 'required',
            'dateTo' => 'required'            
        ]);


        $dateFrom = $request['dateFrom'];
        $dateTo = $request['dateTo'];
        $page="arrival";
        $path = '/templates/' . $page;

        $arrivals = DB::table('reservationitems')
            ->leftjoin('roomitems', 'reservationitems.room_number', '=', 'roomitems.ID')
            ->leftjoin('roomtypeitems', 'reservationitems.roomtype', '=', 'roomtypeitems.ID')
            ->select('reservationitems.*', 'roomitems.title as room_title', 'roomtypeitems.title as roomtype_title')
            ->whereBetween('reservationitems.arrival', [$dateFrom, $dateTo])
            // ->whereBetween('cast(reservationitems.arrival as date)', [$dateFrom, $dateTo])
            ->where('reservationitems.status','confirmed')
            ->orderBy('reservationitems.arrival', 'asc')
            ->get();

            // print_r($arrivals);exit;

            return view($path, [
                'data' => $arrivals,
                'page_name' => $page
            ]);
    }

    /*get departure reports*/
    public function getDepartures(Request $request){
        $this->validate($request, [
            'dateFrom' => 'required',
            'dateTo' => 'required'            
        ]);


        $dateFrom = $request['dateFrom'];
        $dateTo = $request['dateTo'];
        $page="departure";
        $path = '/templates/' . $page;

        $departures = DB::table('reservationitems')
            ->leftjoin('roomitems', 'reservationitems.room_number', '=', 'roomitems.ID')
            ->leftjoin('roomtypeitems', 'reservationitems.roomtype', '=', 'roomtypeitems.ID')
            ->select('reservationitems.*', 'roomitems.title as room_title', 'roomtypeitems.title as roomtype_title')
            ->whereBetween('reservationitems.departure', [$dateFrom, $dateTo])
            ->where('reservationitems.status','confirmed')
            ->orderBy('reservationitems.departure', 'asc')
            ->get();

            return view($path, [
                'data' => $departures,
                'page_name' => $page
            ]);
    }

     /*get getStayingGuests reports*/
     public function getStayingGuests(Request $request){
        $this->validate($request, [
            'dateFrom' => 'required',
            'dateTo' => 'required'            
        ]);


        $dateFrom = $request['dateFrom'];
        $dateTo = $request['dateTo'];
        $page="stayingGuests";
        $path = '/templates/' . $page;

        $stayingGuests = DB::table('reservationitems')
            ->leftjoin('roomitems', 'reservationitems.room_number', '=', 'roomitems.ID')
            ->leftjoin('roomtypeitems', 'reservationitems.roomtype', '=', 'roomtypeitems.ID')
            // ->selectRaw("")
            ->select('reservationitems.*', 'roomitems.title as room_title', 'roomtypeitems.title as roomtype_title')
            // ->whereBetween('reservationitems.departure', [$dateFrom, $dateTo])
            ->where('reservationitems.account_type','ROOM')
            ->where('reservationitems.actual_arrival','<=',$dateFrom)
            ->orWhere('reservationitems.actual_arrival','<=',$dateFrom)
            ->orderBy('reservationitems.actual_arrival', 'asc')
            ->get();

            return view($path, [
                'data' => $stayingGuests,
                'page_name' => $page
            ]);
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
     * @param  \App\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function show(Report $report)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function edit(Report $report)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Report $report)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function destroy(Report $report)
    {
        //
    }
}
