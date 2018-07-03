<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StyleController extends Controller
{
    //this method will retrieve the wheel input information, search for the matching style attributes and return those results on the results page using API
    public function index()
    {
<<<<<<< HEAD
        //number of categories from the database
=======

        $results = \App\Style::where('id', 8)->first();

        $view = view('results');
        $view->results = $results;

        return $view;
    
>>>>>>> 0d2514477f8a11437f6bd393d9632f961c7ca33f
    }
    
    public function search()
    {
        //Connect to style_attribute table

        //Select everything

        //Search by attri_id 1-10 and check if the enter value is in the range of the max and min

        //if it is in the range then add style_id in results 

        //else ignore the style_id

        //Send to API
    }


    public function show($style_id = null)
    {
        //Connect to the Styles Table, we want to use the style_id to find the style name and description

        //Connect to the Attribute Table, we want to use the attri_id and the range (level/minmax) to return the 10 attribute values (i.e. gold to amber copper).  

        //Output information to API
        $view= view('style');
        $style = \App\Style::findOrFail($style_id);
        $view->style = $style;
        return $view  ;

    }
}
