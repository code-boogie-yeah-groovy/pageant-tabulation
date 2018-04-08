<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    //

    public function passcode() {
        return $this->hasMany('App\Passcode');
    }

    public function category() {
        return $this->hasMany('App\Category');
    }

    public function contestant() {
        return $this->hasMany('App\Contestant');
    }
}
