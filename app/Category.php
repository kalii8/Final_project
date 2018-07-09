<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'category';

    public function style(){

        return $this->hasMany('App\Style');
    }
}
