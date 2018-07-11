<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Search;
use App\SearchStyleAttribute;
use App\Attribute;


class SearchController extends Controller
{
    //
    public function store(Request $request)
    {

        // Search::create([
        //     'user_id' => $request->input('user_id')
        //  ]);

        // $attribute = Attribute::where('attribute_name', $request->input('attribute_name'))->first();

        //  SearchStyleAttribute::create([
        //      'search_id' => $search->id,
        //      'attribute_id' => $attribute->id,
        //      'min' => $request->input('min')
             
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
        //  ]);

        return redirect()->action('StyleController@index', $request);
    }



    

   
}
