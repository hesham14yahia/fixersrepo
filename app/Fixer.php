<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fixer extends Model
{
    protected $fillable = ['name', 'image_bath', 'birth_date', 'city_id', 'category_id'];

    public function category(){
        return $this->belongsTo('App\Category');
    }
    public function city(){
        return $this->belongsTo('App\City');
    }
    public function areas(){
        return $this->belongsToMany('App\Area', 'fixer_area');
    }
}
