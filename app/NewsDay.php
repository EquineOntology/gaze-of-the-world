<?php


namespace CFratta\GazeOfTheWorld;


use Illuminate\Database\Eloquent\Model;

class NewsDay extends Model
{
    public $primaryKey = 'recordId';

    protected $table = 'news_data';

    public $timestamps = false;
}