<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Attribute;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login(Request $request){
        return view('components.login');
    }
    public function store(Request $request){
    dd($request->request);
    }
    public function logout(Request $request){
    dd($request->request);

    }
}
