<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    function login(Request $req){

        $user = User::where(['email'=>$req->email])->first();
        
        if(!$user || ! Hash::check($req->password, $user->password))
        {
            return "Email or password are incorrect!";
           
        }
        else
        {
            $req->session()->put('user', $user);
            return redirect('/');
        
        }
    }
}
