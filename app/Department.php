<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $table = "departments";
    protected $fillable = [
        '_token','id', 'created_at', 'updated_at','deleted_at','department_name'
    ];
}
