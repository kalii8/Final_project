<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        $attributes = \App\Attribute::all();
        $view = view('homepage');
        $view->attributes = $attributes;
        return $view;
    }
    

}
