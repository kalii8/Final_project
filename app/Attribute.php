<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    protected $table = 'attributes';

    public function styleAttribute() {

        return $this->hasMany('App\StyleAttribute', 'attri_id');
    }

    public function attributeLevel() {

        return $this->hasMany('App\AttributeLevel', 'attri_id');
    }
}
