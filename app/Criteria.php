<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Criteria extends Model
{
    //

    public function category() {
        return $this->belongsTo('App\Category');
    }

    public function score() {
        return $this->hasMany('App\Score');
    }
}
