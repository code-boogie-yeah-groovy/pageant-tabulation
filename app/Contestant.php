<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contestant extends Model
{
    //


    protected $fillable = ['contestant_name', 'mister', 'contestant_no', 'event_id'];

    public function event() {
        return $this->belongsTo('App\Event');
    }

    public function score() {
        return $this->hasMany('App\Score');
    }
}
