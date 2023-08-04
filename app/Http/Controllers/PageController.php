<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Product;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class PageController extends Controller
{

    //
    public function main(){
        // $value = Session::get('username');
        $cont=Contact::all();
        $contact=$cont[0] ?? null;
        $admin=session('username');
        if(isset($admin)){
            $products=Product::all();
            $price=0;
            foreach ($products as $product) {
                $price+=$product->price;
            }

            return view('main')->with('products', $products)->with('price', $price)->with('contact' ,$contact);
            // dd($products)
        }else{
            return view('login')->with('error', 'user');
        }

    }
    public function header(){
        return view('layout/header');
    }



    public function signup(){
        return view('register');
    }


    public function error404(){
        return view('404');
    }

}
