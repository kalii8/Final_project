<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User;

class UserController extends Controller
{
        //Sends API for all User Profiles
        public function index() {
        $users = User::all();
        return $users;
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'user_name' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        User::create([
            'user_name' => $request->input('user_name'),
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'email' => $request->input('email'),
            'password' => $request->input('password')
         ]);
    }
}