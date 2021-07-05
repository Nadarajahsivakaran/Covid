<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\passModel;

class passController extends Controller
{
    //
    public function pass(){
        return view('pass');
    }

    public function passAction(Request $request){
        $request->validate([
            'name'=>"required",
            'fullname'=>"required",
            'gs'=>"required",
            'address'=>"required",
            'occupation'=>"required",
            'phonenumber'=>"required|max:10",
            'pass'=>"required",
            'comment'=>"required",

        ]);

        $passModel= new passModel();
        $passModel->name=$request->name;
        $passModel->fullname=$request->fullname;
        $passModel->gs=$request->gs;
        $passModel->address=$request->address;
        $passModel->occupation=$request->occupation;
        $passModel->phonenumber=$request->phonenumber;
        $passModel->pass=$request->pass;
        $passModel->comment=$request->comment;
        $save=$passModel->save();

        if($save){
            return back()->with('success','Submitted detail successfully');
        }
        else{
            return back()->with('fail','Something error,Try again later');
        }


    }
}
