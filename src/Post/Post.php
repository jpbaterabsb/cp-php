<?php

namespace App\Post;

use App\Image\Image;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = "Post";
    public $timestamps = false;
    public $fillable = ['post',"User_id","Post_date",'id',"message"];

    public function images()
    {
        return $this->hasMany('App\Image\Image','Post_id');
    }


    public function comments()
    {
        return $this->hasMany('App\Comment\Comment','Comment_id');
    }
}