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
}
