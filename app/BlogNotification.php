<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class BlogNotification extends Model
{
    protected $table = "notifications";
    protected $fillable = [
        '_token','id', 'created_at', 'updated_at','deleted_at','comment_person_id','noti_type','noti_desc','blog_id'
    ];
}
