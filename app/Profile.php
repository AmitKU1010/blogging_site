<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = "profiles";
    protected $fillable = [
        '_token','id', 'created_at', 'updated_at','deleted_at','pin_codes'
    ];
}
