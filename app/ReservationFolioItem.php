<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReservationFolioItem extends Model
{
    protected $fillable = [
        'reservation_id',
         'description',
         'plu_group',
         'price',
         'debit',
         'credit',
         'pak',
         'sub_folio',
         'account_number',
         'links',
         'qty',
         'terminal',
         'reference',
         'charge',
         'audit',
         'action',
         'plu',
         'reason',
         'source_app',
         'type',
         'signature_created',
         'signature_modified',
         'status',
         'date_created',
         'date_modified'
        ];
}
