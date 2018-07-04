<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    protected $table = 'attributes';

    public function styleAttributes() {

        return $this->hasMany('App\StyleAttribute', 'attri_id');
    }

    public function attributeLevels() {

        return $this->hasMany('App\AttributeLevel', 'attribute_id');
    }
}
