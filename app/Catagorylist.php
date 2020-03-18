<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Catagorylist extends Model
{
    protected $table = "catagory_lists";
    protected $fillable = [
        '_token','id', 'created_at', 'updated_at','deleted_at','department_name','catagory_name','subcatagory_name','service_type_name'
    ];
}
