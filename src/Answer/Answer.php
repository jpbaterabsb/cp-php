<?php


namespace App\Answer;


use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $table = "Answer";
    public $timestamps = false;
    public $fillable = ['id','Comment_id','answer','Answer_date'];


    public function comment()
    {
        return $this->belongsTo('App\Comment\Comment','Comment_id');
    }
}