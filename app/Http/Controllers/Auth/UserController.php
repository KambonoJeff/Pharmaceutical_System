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
        dd($request);
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



        //  if (Auth::attempt($request->only('email','password')))
        //     {
        //         return response()->json([
        //             'data'=> $user,
        //             'token'=> $user->createToken('API token of '.$user->name)->plainTextToken
        //         ]);

        //     }
        //  else{
        //     return response()->json(['Not Signed In'],403);
        //  }
    }
    public function logout(Request $request){
        dd($request);


    }
}
