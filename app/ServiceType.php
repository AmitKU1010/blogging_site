<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceType extends Model
{
    protected $table = "service_types";
    protected $fillable = [
        '_token','id', 'created_at', 'updated_at','deleted_at','service_type'
    ];
}
