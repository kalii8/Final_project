<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Style;

class StyleController extends Controller
{
    public function index(){
        $styles = Style::all();
        return $styles;
    }
}
