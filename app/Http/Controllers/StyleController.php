<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StyleController extends Controller
{
    //this method will retrieve the wheel input information, search for the matching style attributes and return those results on the results page using API
    public function index(Request $request)

    {
        $alcohol_level = $request->input('alcohol');
        $color_level = $request->input('color');
        $biterness_level = $request->input('biterness');
      // $results = \App\StyleAttribute::where('id', $alcohol_level);
           // where('attribute_name', $request->input('attribute_name'));

        $results = \App\StyleAttribute::
                    where([
                        ['attribute_id', '=', 1],
                        ['min', '<=', $alcohol_level],
                        ['max', '>=', $alcohol_level]
                    ])
                    // ->orWhere([
                    //     ['attribute_id', '=', 2],
                    //     ['min', '<=', $color_level],
                    //     ['max', '>=', $color_level]
                    // ])
                    ->get();       
        
        return $results;
    
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
