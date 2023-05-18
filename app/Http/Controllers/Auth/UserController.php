<?php

namespace App\Http\Controllers\Auth;

use Attribute;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function login(Request $request){
        $data = Auth::attempt($request->only('email ', 'password'));
        if($data){
            return redirect()-route('dashboard');
        }
        else{
            $authuser = auth()->user();
            if($authuser){
                return redirect()->route('community');
            }
            return redirect()->route('login');
        }
    }
    public function store(Request $request){
       $data = $request->validate(
        [
             'name' => 'required|max:255',
             'email' => 'required|email|unique:users,email|max:255',
             'password'=>'required|confirmed'

         ]);
         if($data){
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make( $request->password)

             ]);
             $authenticated = Auth::attempt($request->only('email', 'password'));
             if ($authenticated){
                return redirect()->route('community');
             }
             dd('something is wrong');
         }
         else{
            dd('not validated');
         }

    }
    public function logout(Request $request){
        return response()->json('logged out');


    }
}
