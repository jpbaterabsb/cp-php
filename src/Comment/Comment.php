<?php

namespace App\Answer;


use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = "Answer";
    public $timestamps = false;
}