<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Attribute;
use App\AttributeLevel;
use App\StyleAttribute;

class AttributeController extends Controller
{
    //Sends API for all the attribute names with the attribute levels for each.  This is for the Beer Styles Results when expanded.
    public function index() {
        $attribute = Attribute::with('attributeLevels')->get();
        return $attribute;
    }

    //Sends API for all Style Attributes. This will be used for the wheel search.
    public function searchAttribute() {
        $searchAttribute = StyleAttribute::all();
        return $searchAttribute;
    }

}
