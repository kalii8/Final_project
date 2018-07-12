<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Style;

class StyleController extends Controller
{
    //this method will retrieve the wheel input information, search for the matching style attributes and return those results on the results page using API
    public function index(Request $request)

    {
        $alcohol_level = $request->input('alcohol');
        $color_level = $request->input('color');
        $biterness_level = $request->input('biterness');
        $aroma_level = $request->input('aroma');
        $hop_level = $request->input('hop');
        $malt_level = $request->input('malt');
        // $fruit_level = $request->input('fruit');
     
      // $results = \App\StyleAttribute::where('id', $alcohol_level);

        $alcohol = \App\StyleAttribute::
                    where([
                        ['attribute_id', '=', 1],
                        ['min', '<=', $alcohol_level],
                        ['max', '>=', $alcohol_level]
                    ])->pluck('style_id')
                    ->toArray(); 
        
        

        $color = \App\StyleAttribute::where([
                         ['attribute_id', '=', 2],
                         ['min', '<=', $color_level],
                         ['max', '>=', $color_level]
                     ])
                    ->pluck('style_id')
                    ->toArray(); ;

        $biterness = \App\StyleAttribute::where([
                        ['attribute_id', '=', 3],
                        ['min', '<=', $biterness_level],
                        ['max', '>=', $biterness_level]
                    ])
                   ->pluck('style_id')
                   ->toArray();

        $aroma = \App\StyleAttribute::where([
                    ['attribute_id', '=', 4],
                    ['min', '<=', $aroma_level],
                    ['max', '>=', $aroma_level]
                ])
               ->pluck('style_id')
               ->toArray();

        $hop = \App\StyleAttribute::where([
                ['attribute_id', '=', 5],
                ['min', '<=', $hop_level],
                ['max', '>=', $hop_level]
            ])
           ->pluck('style_id')
           ->toArray();

        $malt = \App\StyleAttribute::where([
                    ['attribute_id', '=', 6],
                    ['min', '<=', $malt_level],
                    ['max', '>=', $malt_level]
                ])
            ->pluck('style_id')
            ->toArray();

        // $fruit = \App\StyleAttribute::where([
        //             ['attribute_id', '=', 7],
        //             ['min', '<=', $fruit_level],
        //             ['max', '>=', $fruit_level]
        //         ])
        //     ->pluck('style_id')
        //     ->toArray();
        

        $intersect = array_intersect($alcohol, $color, $biterness, $aroma, $malt, $hop);

        $arrayEquals = array_values($intersect);

        $returnStyles = Style::whereIn('id', $arrayEquals)
            ->pluck('style_name', 'description');

        return response()
            ->json($returnStyles)
            ->withHeaders([
                'Access-Control-Allow-Origin' => '*'
            ]);
    
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
