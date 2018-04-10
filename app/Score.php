<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    //

    public function event() {
        return $this->belongsTo('App\Event');
    }

    public function passcode() {
        return $this->belongsTo('App\Passcode');
    }

    public function contestant() {
        return $this->belongsTo('App\Contestant');
    }

    public function category() {
        return $this->belongsTo('App\Category');
    }

    public function criteria() {
        return $this->belongsTo('App\Criteria');
    }
}
