<?php
 
namespace App;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    protected $table = "branches";
    protected $fillable = [
        '_token','id', 'created_at', 'updated_at','deleted_at','name','address','pin'
    ];
}
