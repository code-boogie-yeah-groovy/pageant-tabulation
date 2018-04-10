<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //

    public function event() {
        return $this->belongsTo('App\Event');
    }

    public function criteria() {
        return $this->hasMany('App\Criteria');
    }

    public function score() {
        return $this->hasMany('App\Score');
    }
}
