<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoomTypeItem extends Model
{
    protected $fillable = [
        'title',
         'roomclass',
         'beds',
         'description',
         'remark',
         'type',
         'signature_created',
         'date_created',
         'date_modified'
        ];
}
