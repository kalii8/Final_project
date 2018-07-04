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
        return $searchStyleAttribute;
    }

    //Sends API for all Style Attributes. This will be used for the wheel search.
    public function returnStyleAttribute() {
        $returnStyleAttribute = StyleAttribute::with('style')->get();
        return $returnStyleAttribute;
    }

    //Sends API for all info in style table.  This will be used for the Beer Styles Results.
    public function index(){
        $styles = Style::all();
        return $styles;
    }

    //Sends API for style and includes the attribute and attribute levels
    public function styleWithLevel() {
        $styleWithLevel = Style::with('styleAttribute')
        ->get();
        return $styleWithLevel;
    }

    //Sends API for all style attribute info by color.  This will be used for Beer Styles List.
    public function searchColor() {
        $attribute = Attribute::where('attribute_name', 'color')->first();

        $color = Style::join('style_attribute', 'style.id', '=', 'style_attribute.style_id')
            ->where('style_attribute.attribute_id', $attribute->id)
            ->orderBy('style_attribute.min', 'asc')
            ->orderBy('style_attribute.max', 'asc')
            ->get();
        return $color;
    }

    //Sends API for all the categories with the beer styles in each one.  This will be used for Beer Styles List.
    public function category() {
        $category = Category::with('style')->get();
        return $category;       
    }

}
