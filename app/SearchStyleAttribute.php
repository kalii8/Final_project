<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SearchStyleAttribute extends Model
{
    //
    protected $table = 'categories';

    public function search() {

        return $this->belongTo('App\Search');
    }

    public function styleAttribute() {

        return $this->belongTo('App\StyleAttribute');
    }
}
