<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //
    function check(Request $request){
        $request->validate([
            'email'=>'required|email|exits:administrators,email',
            'password'=>'required|min:8|max:30',
        ],[
            'email.exists'=>'This email does not exits'
        ]);

        

    }


}
