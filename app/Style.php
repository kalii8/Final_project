<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Style extends Model
{
    //
    protected $table = 'style';

    public function category(){

        return $this->belongsTo('App\Category');
    }

    public function style_attributes(){
        
        return $this->hasMany('App\StyleAttribute');
    }
}
