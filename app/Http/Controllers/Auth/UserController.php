<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Attribute;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login(Request $request){
        $request->validate([
            $request->email => 'required|email|max:255',
            $request->password=>'required|confirmed'
        ]);
        dd($request);



    }
    public function store(Request $request){
     $request->validate(
        [
            $request->name => 'require|max:255|string',
            $request->email => 'required|email|max:255',
            $request->password=>'required|confirmed'

        ],
        []
    );
    dd($request);
    }
    public function logout(Request $request){
    dd($request->request);

    }
}
