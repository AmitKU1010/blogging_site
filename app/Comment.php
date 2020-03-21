<?php
namespace App;
use Illuminate\Database\Eloquent\Model;


class Comment extends Model
{
    protected $table = "comments";
    protected $fillable = [
        '_token','id', 'created_at', 'updated_at','deleted_at','user_id','blog_id','comment_description'
    ];
}
