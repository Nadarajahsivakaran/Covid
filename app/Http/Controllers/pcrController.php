<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pcrModel;

class pcrController extends Controller
{
    //
    public function pcr(){
        return view('pcr');
    }

    public function pcrAction(Request $request){
        $request->validate([
            'name'=>"required",
            'fullname'=>"required",
            'gs'=>"required",
            'address'=>"required",
            'occupation'=>"required",
            'phonenumber'=>"required|max:10",
            'visit'=>"required",
            'comment'=>"required",

        ]);

        $pcrModel= new pcrModel();
        $pcrModel->name=$request->name;
        $pcrModel->fullname=$request->fullname;
        $pcrModel->gs=$request->gs;
        $pcrModel->address=$request->address;
        $pcrModel->occupation=$request->occupation;
        $pcrModel->phonenumber=$request->phonenumber;
        $pcrModel->visit=$request->visit;
        $pcrModel->comment=$request->comment;
        $save=$pcrModel->save();

        if($save){
            return back()->with('success','Submitted detail successfully');
        }
        else{
            return back()->with('fail','Something error,Try again later');
        }


    }
}
