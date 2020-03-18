<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcatagory extends Model
{
    protected $table = "subcatagories";
    protected $fillable = [
        '_token','id', 'created_at', 'updated_at','deleted_at','subcatagory_name','catagory_name'
    ];
}
