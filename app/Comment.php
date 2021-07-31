<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function user() {
        //Many to one
        return $this->belongsTo('App\User');   
    }
}
