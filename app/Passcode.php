<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Passcode extends Model
{
    //

    public function event() {
        return $this->belongsTo('App\Event');
    }

    public function score() {
        return $this->hasMany('App\Score');
    }

    protected $fillable = ['code', 'event_id', 'judge_name', 'usable'];
}
