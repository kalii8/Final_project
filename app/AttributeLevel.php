<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AttributeLevel extends Model
{
    protected $table = 'attribute_levels';

    public function Attribute() {

        return $this->belongsTo('App\Attribute');
    }
}
