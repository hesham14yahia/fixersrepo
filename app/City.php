<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = ['name', 'country_id'];

    public function fixers(){
        return $this->hasMany('App\Fixer');
    }
    public function areas(){
        return $this->hasMany('App\Area');
    }
}
