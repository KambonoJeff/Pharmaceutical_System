<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(Request $request){
        $data = auth()->user();
        if($data){
            return view('community');
        }else{
            dd('Not auhtenticated for some f reason');
        }
    }
}
