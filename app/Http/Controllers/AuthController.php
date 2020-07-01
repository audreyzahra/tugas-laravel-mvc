<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function form() {
        return view('register');
    }

    public function welcome(request $request) {
        $name = $request["firstname"] . " " . $request["lastname"];
        return view('welcome2', ['name' => $name]);
    }

}
