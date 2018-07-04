<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Style;
use App\Attribute;
use App\AttributeLevel;
use App\Category;
use App\User;

class StyleController extends Controller
{
    //Sends API for all info in style table.  This can be used for the Beer Styles Results.
    public function index(){
        $styles = Style::all();
        return $styles;
    }

    //Sends API for all style attribute info by color.  This will be used for Beer Styles List.
    public function search() {
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

    //Sends API for the User Profile
    public function user() {
        $users = User::all();
        return $users;
    }
    
}
