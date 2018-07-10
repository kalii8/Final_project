<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Attribute;
use App\AttributeLevel;
use App\StyleAttribute;

class AttributeController extends Controller
{
    //Sends API for all attribute names.  This is for the Beer wheel names.
    public function index() {
        $attribute = Attribute::all();
        return response()
            ->json($attribute)
            ->withHeaders([
                'Access-Control-Allow-Origin' => '*'
            ]);
        // return $attribute;
    }

    //Sends API for all attribute names.  This is for the Beer wheel names.
    public function level() {
        $level = AttributeLevel::all();
        return response()
            ->json($level)
            ->withHeaders([
                'Access-Control-Allow-Origin' => '*'
            ]);
        // return $level;
    }

    //Sends API for all the attribute names with the attribute levels for each.  This is for the Beer Styles Results when expanded.
    public function attributeLevel() {
        $attributeLevel = Attribute::with('attributeLevels')->get();
        return response()
            ->json($attributeLevel)
            ->withHeaders([
                'Access-Control-Allow-Origin' => '*'
            ]);
        // return $attributeLevel;
    }
}
