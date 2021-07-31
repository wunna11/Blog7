<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    function articles() {
        return $this->hasMany('App\Article');
    }
}
