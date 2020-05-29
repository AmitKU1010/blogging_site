<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Likedislikes extends Model
{
    protected $table = "like_dislikes";
    protected $fillable = [
        'id', 'created_at', 'updated_at','deleted_at','user_id','blog_id','like','dislike'
    ];
}
