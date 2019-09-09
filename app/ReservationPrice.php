<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReservationPrice extends Model
{
    protected $fillable = [
        'reservation_id',
         'price_rate',
         'folio_room',
         'folio_extra',
         'folio_other',
         'weekday',
         'weekend',
         'holiday',
         'type',
         'price_room',
         'price_extra',
         'price_total',
         'invoice',
         'comp_nights',
         'comp_visits',
         'auto_deposit',
         'block_pos',
         'deleted',
         'charge_from_date'
        ];
}
