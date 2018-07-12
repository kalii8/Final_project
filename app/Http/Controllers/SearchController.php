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

<<<<<<< HEAD
        // $attribute = Attribute::where('attribute_name', $request->input('attribute_name'))->first();
=======
        //  $attribute = Attribute::where('attribute_name', $request->input('attribute_name'))->first();
>>>>>>> fc297c8c0a86168db0164ca2e042f4aecf6fba60

        //  SearchStyleAttribute::create([
        //      'search_id' => $search->id,
        //      'attribute_id' => $attribute->id,
        //      'min' => $request->input('min')
<<<<<<< HEAD
=======
             
>>>>>>> fc297c8c0a86168db0164ca2e042f4aecf6fba60
             
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
