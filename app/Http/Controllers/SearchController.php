<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Search;

class SearchController extends Controller
{
    //
    public function store(Request $request)
    {
        Search::create([
            'alcohol_level' => $request->input('alcohol_level'),
            'color_level' => $request->input('color_level'),
            'biterness_level' => $request->input('biterness_level'),
        ]);

        return redirect()->action('StyleController@index');
    }



    

   
}
