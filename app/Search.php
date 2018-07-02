<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Search extends Model
{
    //
    public $timestamps = false;
    protected $guarded = []; 
    protected $table = 'search';
}
