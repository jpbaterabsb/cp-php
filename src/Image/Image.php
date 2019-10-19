<?php

namespace App\Image;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = "Image";
    public $timestamps = false;
    public $fillable = ['name',"Post_id",'id'];

    public function post()
    {
        return $this->belongsTo('App\Post\Post','Post_id');
    }
}