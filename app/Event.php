<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    //

    public function user() {
        return $this->belongsTo('App\User');
    }
    
    public function passcode() {
        return $this->hasMany('App\Passcode');
    }

    public function category() {
        return $this->hasMany('App\Category');
    }

    public function contestant() {
        return $this->hasMany('App\Contestant');
    }

    public function score() {
        return $this->hasMany('App\Score');
    }
}
