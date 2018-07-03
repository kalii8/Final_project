<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StyleAttribute extends Model
{
    //
    protected $table = 'style_attribute';

    public function style(){
        
        return $this->belongsTo('App\Style');
        
    }

    public function attribute() {

        return $this->belongsTo('App\Attribute');
    }

    public function searchStyleAttribute() {

        return $this->hasMany('App\SearchStyleAttribute', 'attri_id');
    }
}
