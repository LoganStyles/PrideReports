<?php

namespace App\Http\Controllers;

use App\ReservationItem;
use Illuminate\Http\Request;

class ReservationItemController extends Controller
{
    public function index()
    {
        return ReservationItem::all();
    }
 
    public function show(ReservationItem $reservationItem)
    {
        // return ReservationItem::find($id);
        return $reservationItem;
    }

    public function store(Request $request)
    {
        // return ReservationItem::create($request->all());
        $reservationItem = ReservationItem::create($request->all());
        return response()->json($reservationItem, 201);
    }

    public function update(Request $request, ReservationItem $reservationItem)
    {
        // $article = ReservationItem::findOrFail($id);
        // $article->update($request->all());

        // return $article;

        $reservationItem->update($request->all());
        return response()->json($reservationItem, 200);
    }

    public function delete(Request $request, ReservationItem $reservationItem)
    {
        // $article = ReservationItem::findOrFail($id);
        $reservationItem->delete();

        // return 204;


        return response()->json(null, 204);
    }

}
