<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {

        $view = view('homepage');
        return $view;
    }
    

}
