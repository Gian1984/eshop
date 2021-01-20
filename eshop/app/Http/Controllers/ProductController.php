<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

// fetch all the product on the index page
class ProductController extends Controller
{
    function index(){

        $data = Product::all();

        return view('product', ['products'=>$data]);

    }

    // access to detail products pages when click on link
    function detail($id){

        $data = Product::find($id);
        return view('detail',['product'=>$data]);

    }
    
    // search bar query
    function search(Request $req){
 
        $data = Product::where('name','like','%'.$req->input('query').'%')->get();
        return view('search',['products'=>$data]);
        //alert an error if such not a product find 
    } 
    
    function addToCart(Request $req){

        if($req->session()->has('user'))
        {

            $cart = new Cart;
            $cart->user_id=$req->session()->get('user')['id'];
            $cart->product_id=$req->product_id;
            $cart->save(); 
            return redirect('/');
        }
        else
        {
            return redirect('login');
        }
    }
    
    static function cartItem(){

        $userId=Session::get('user')['id'];
        return Cart::where('user_id', $userId)->count();
    }
    
}
