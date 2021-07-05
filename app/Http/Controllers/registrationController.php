<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\models\RegistrationModel;

class registrationController extends Controller
{

    public function registration(){
        return view('registration');
    }

    public function save(Request $request ){
        $request->validate([
            'username'=>"required|unique:registration",
            'email'=>"required",
            'password'=>"required|min:5| max:12",
        ]);

        $registrationModel= new registrationModel();
        $registrationModel->username=$request->username;
        $registrationModel->email=$request->email;
        $registrationModel->password=Hash::make($request->password);
        $save=$registrationModel->save();

        if($save){
            return redirect('login')->with('success','Registered successfully');
        }
        else{
            return back()->with('fail','Something error,Try again later');
        }
    }

    public function view(){
        return view('login');
    }

    public function login(Request $request){
        $username=$request->input('username');
        $password=$request->input('password');

        $login=DB::table('registration')->where('username',$username)->first();
        
       if(!Hash::check ($password,$login->password)){
        return redirect('card');
       }
       else{
           return "error";
       }
    }


    public function card(){
        return view('card');
    }
}