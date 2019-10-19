<?php

namespace App\Comment;

use App\Answer\Answer;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = "Comment";
    public $timestamps = false;
    public $fillable = ['comment',"Post_id","Comment_date",'id'];

    public function answers()
    {
        return $this->hasMany('App\Answer\Answer','Comment_id');
    }


    public function post()
    {
        return $this->belongsTo('App\Post\Post','Post_id');
    }
}