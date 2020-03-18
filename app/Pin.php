<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pin extends Model
{
    protected $table = "pins";
    protected $fillable = [
        '_token','id', 'created_at', 'updated_at','deleted_at','pin_codes'
    ];
}
