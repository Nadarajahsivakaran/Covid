<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use app\models\RegistrationModel;

class registrationController extends Controller
{

    public function registration(){
        return view('registration');
    }

    public function save(Request $request ){

         DB::table('registration')->insert([
            'fullname'=>$request->fullname,
            'email'=>$request->email,
            'phonenumber'=>$request->phonenumber,
            'username'=>$request->username,
            'password'=>Hash::make($request->password),
            ]);
            return back()->with('success','registered successfully');

    }

    public function view(){
        return view('login');
    }

    public function login(Request $request){

        $username=$request->input('username');
        $password=$request->input('password');
        //  return Hash::make($password);

        $login=DB::table('registration')->where('username',$username)->first();
        
       if(Hash::check ($password,$login->password)){
           return "success";
       }
       else{
           return "error";
       }
    }
}