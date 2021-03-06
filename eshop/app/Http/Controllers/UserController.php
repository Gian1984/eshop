<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Inforder;
use App\Models\Newsletter;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;





class UserController extends Controller
{
    function login(Request $req){

        $user = User::where(['email'=>$req->email])->first();
        
        if(!$user || ! Hash::check($req->password, $user->password))
        {
            
            $req->session()->flash('error', 'Email or password incorrect!'); 
            $message = $req->session()->get('error');
            return view('login', ['error'=> $message]);
           
        }
        else
        {
            $req->session()->put('user', $user);
            return redirect('/');
        
        }
    }

    function register(Request $req){

        $user = New User;
        $name = implode(" ",$req->name);
        $user->name=$name;
        $user->email=$req->email;
        $user->password=Hash::make($req->password);
        $user->save();
        return redirect('login');
    }

    function newsLetter(Request $req){
        
        $newsletter = new Newsletter;
        $newsletter->email=$req->newsletter;
        $newsletter->save();
        return redirect()->back();
    }

    
    function infOrder(Request $req){
        
        $inforder = new Inforder;
        $inforder->contact=$req->contact;
        $inforder->inforder=$req->inforder;
        $inforder->save();
        $req->session()->flash('success', 'Your query will be treated soon as possible!'); 
        $message = $req->session()->get('success');
        return view('contact_us', ['success'=> $message]);
        return redirect()->back();
        
    }
  
    
}
