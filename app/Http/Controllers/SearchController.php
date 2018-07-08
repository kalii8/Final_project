<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Search;
use App\SearchAttri;

class SearchController extends Controller
{
    //
    public function store(Request $request)
    {

        SearchAttri::create([
            'attribute_id' => $request->input('attribute_id'),
            'min' => $request->input('min'),
            'max' => $request->input('max'),
            'search_id' => $request->input('search_id')

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

        return redirect()->action('StyleController@index');
    }



    

   
}
