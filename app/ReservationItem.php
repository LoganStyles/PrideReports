<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReservationItem extends Model
{
    protected $fillable = [
        'reservation_id',
         'account_type',
         'master_id',
         'arrival',
         'nights',
         'departure',
         'room_number',
         'roomtype',
         'client_type',
         'client_name',
         'agency_name',
         'agency_name',
         'guest1',
         'guest2',
         'guest_count',
         'adults',
         'children',
         'type',
         'remarks',
         'date_created',
         'date_modified',
         'signature_created',
         'signature_modified',
         'status',
         'deleted',
         'actual_arrival',
         'actual_departure',
         'last_room_charge',
         'last_account_close'
        ];
}
