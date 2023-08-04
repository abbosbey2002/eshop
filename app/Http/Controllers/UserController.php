<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class UserController extends Controller
{
    //
    public function addUser(){
        return view('register');
    }


    public function login(){
        return view('login');
    }

    public function store(Request $request){
        $admin=session('username');
        if(isset($admin)){



            $newUser=User::create([
                'login'=>$request->login,
                'author'=>$admin,
                'password'=>$request->password,
            ]);


        }else{
            return view('login')->with('error', 'user');
        }

        return redirect()->back();

    }

    public function sign(Request $req){


        $login=User::where('login', $req->input('login'))->get();

           if(count($login)){
            $password=$login[0]->password;
               if($login[0]->login == $req->input('login') && $password == $req->input('password')){
                   session(['username'=>$login[0]->login]);
                   return view('main');
               }else{
                   return view('login')->with('error', 'password');
                }
               }else{
                return view('login')->with('error', 'user');
               }
    }





}
