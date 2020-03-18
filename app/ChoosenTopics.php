<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class ChoosenTopics extends Model
{
    protected $table = "choosen_topics";
    protected $fillable = [
        '_token','id', 'created_at', 'updated_at','deleted_at','user_id','choosen_topics','status'
    ];
}
