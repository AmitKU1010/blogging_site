<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use App\Category;

class Product extends Model
{ 
     protected $table = "products";
    protected $fillable = [
        '_token','id', 'created_at', 'updated_at','deleted_at','service_name', 'description', 'department_name', 'catagory_name', 'subcatagory_name', 'service_type', 'price', 'offer_price', 'tax', 'availbale', 'product_synonyms', 'images', 'video_link', 'booking_time','slug','faq','related_service'
    ];
}
 