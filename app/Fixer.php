<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fixer extends Model
{
    public function category(){

        return $this->belongsTo('App\category');
    }
}
