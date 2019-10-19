<?php

namespace App\User;

use App\Post\Post;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = "User";
    public $timestamps = false;
    public $fillable = ['name',"occupation",'id'];

    public function post()
    {
        return $this->hasMany('App\Post\Post','Post_id');
    }

    public function delete()
    {
        Post::where('User_id',$this->id)
        ->delete();
    }
}