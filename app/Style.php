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

    public function styleAttribute(){
        return $this->hasMany('App\StyleAttribute', 'style_id');
    }
}
