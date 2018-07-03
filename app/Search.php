<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Search extends Model
{
    //
    public $timestamps = false;
    protected $guarded = []; 
    protected $table = 'search';

    public function user() {

        return $this->belongsTo('App\User');
    }

    public function searchStyleAttribute() {

        return $this->hasMany('App\SearchStyleAttribute', 'search_id');
    }
}
