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
}
