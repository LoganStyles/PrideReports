<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = [
        'title',
         'roomtype',
         'roomclass',
         'status',
         'description',
         'bed',
         'firstfloor',
         'secondfloor',
         'thirdfloor',
         'groundfloor',
         'frontview',
         'backview',
         'remark',
         'acctname',
         'lock_room',
         'close_phone_tv',
         'type',
         'signature_created',
         'date_created',
         'date_modified'
        ];
}
