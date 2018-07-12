<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Style;
use App\Attribute;
use App\AttributeLevel;
use App\StyleAttribute;
use App\Category;


class StyleController extends Controller
{
    //Sends API for all Style Attributes. This will be used for the wheel search.
    public function searchStyleAttribute() {
        $searchStyleAttribute = StyleAttribute::all();
        return response()
            ->json($searchStyleAttribute)
            ->withHeaders([
                'Access-Control-Allow-Origin' => '*'
            ]);
        // return $searchStyleAttribute;
    }

    //Sends API for all Style Attributes. This will be used for the wheel search.
    public function returnStyleAttribute() {
        $returnStyleAttribute = StyleAttribute::with('style')->get();
        return response()
            ->json($returnStyleAttribute)
            ->withHeaders([
                'Access-Control-Allow-Origin' => '*'
            ]);
        // return $returnStyleAttribute;

    }

    //Sends API for all info in style table.  This will be used for the Beer Styles Results.
    public function index(){
        $styles = Style::all();
        return response()
        ->json($styles)
        ->withHeaders([
            'Access-Control-Allow-Origin' => '*'
        ]);
        // return $styles;
    }

    //Sends API for style and includes the attribute and attribute levels
    public function styleWithLevel() {
        $styleWithLevel = Style::with('styleAttribute')
        ->get();
        return response()
            ->json($styleWithLevel)
            ->withHeaders([
                'Access-Control-Allow-Origin' => '*'
            ]);
        // return $styleWithLevel;
    }

    //Sends API for all style attribute info by color.  This will be used for Beer Styles List.
    public function searchColor() {
        $attribute = Attribute::where('attribute_name', 'color')->first();

        $color = Style::join('style_attribute', 'style.id', '=', 'style_attribute.style_id')
            ->where('style_attribute.attribute_id', $attribute->id)
            ->orderBy('style_attribute.min', 'asc')
            ->orderBy('style_attribute.max', 'asc')
            ->get();
        return response()
            ->json($color)
            ->withHeaders([
                'Access-Control-Allow-Origin' => '*'
            ]);
        // return $color;
    }

    //Sends API for all the categories with the beer styles in each one.  This will be used for Beer Styles List.
    public function category() {
        $category = Category::with('style')->get();
        return response()
            ->json($category)
            ->withHeaders([
                'Access-Control-Allow-Origin' => '*'
            ]);
        // return $category;       
    }

    public function getOneStyle($id) {
        $oneStyle = Style::find($id);
        return response()
            ->json($oneStyle)
            ->withHeaders([
                'Access-Control-Allow-Origin' => '*'
            ]);
        // return $category;       
    }

}
