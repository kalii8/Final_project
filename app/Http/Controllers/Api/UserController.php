<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User;

class UserController extends Controller
{
        //Sends API for all User Profiles
    public function index() {
        // die('maggot');
    $users = User::all();
    return response()
        ->json($users)
        ->withHeaders([
            'Access-Control-Allow-Origin' => '*'
        ]);
    }

    public function store(Request $request)
    {
        header('Access-Control-Allow-Origin: *');

        $validation = \Validator::make($request->all(), [
            'user_name' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        if ($validation->fails()) {
            return response()
            ->json($validation->messages())
            ->withHeaders([
                'Access-Control-Allow-Origin' => '*'
            ]);
        }

        User::create([
            'user_name' => $request->input('user_name'),
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ]);

        if ($validation == 'success') {
            
        }
    }
}
