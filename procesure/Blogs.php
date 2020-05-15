<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
use Overtrue\LaravelFollow\Traits\CanBeLiked;

class Blogs extends Model
{
	use CanBeLiked;
    protected $table = "blogs";
    protected $fillable = [
        '_token','id', 'created_at', 'updated_at','deleted_at','user_id','catagory_name','subcatagory_name','post_image','post_image_two','post_image_three','post_image_four','post_caption','post_description','title'
    ];
}
