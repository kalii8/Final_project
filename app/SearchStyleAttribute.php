<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SearchStyleAttribute extends Model
{
    //
    protected $table = 'search_attri';
    protected $guarded = [];
    public $timestamps = false;

    
    public function search() {

        return $this->belongTo('App\Search');
    }

    public function styleAttribute() {

        return $this->belongTo('App\StyleAttribute');
    }
}
