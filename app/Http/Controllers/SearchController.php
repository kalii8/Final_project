<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Search;
use App\SearchStyleAttribute;


class SearchController extends Controller
{
    //
    public function store(Request $request)
    {

        Search::create([
            'user_id' => $request->input('user_id')

        //     alcohol: null,
        //     color: null,
        //     bitterness: null,
        //     aroma: null,
        //     hop: null, 
        //     malt: null,
        //     fruit: null, 
        //     smoke: null, 
        //     sweet: null, 
        //     sour: null,
         ]);

         SearchStyleAttribute::create([
             'search_id' => SearchStyleAttribute::all()->search,
             'attribute_id' => $request->input('attribute_id'),
             

             //'alcohol' => $request->input('alcohol')

             

             //     color: null,
             //     bitterness: null,
             //     aroma: null,
             //     hop: null, 
             //     malt: null,
             //     fruit: null, 
             //     smoke: null, 
             //     sweet: null, 
             //     sour: null,
         ]);

        return redirect()->action('StyleController@index');
    }



    

   
}
