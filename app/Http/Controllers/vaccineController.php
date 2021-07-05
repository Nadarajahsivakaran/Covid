<?php

namespace App\Http\Controllers;

use App\Models\vaccineModel;
use Illuminate\Http\Request;

class vaccineController extends Controller
{
    //
    public function vaccine(){
        return view('vaccine');
    }

    public function vaccineAction(Request $request){
        $request->validate([
            'name'=>"required",
            'fullname'=>"required",
            'gs'=>"required",
            'address'=>"required",
            'occupation'=>"required",
            'phonenumber'=>"required|max:10",
            'diseases'=>"required",
            'comment'=>"required",

        ]);

        $vaccineModel= new vaccineModel();
        $vaccineModel->name=$request->name;
        $vaccineModel->fullname=$request->fullname;
        $vaccineModel->gs=$request->gs;
        $vaccineModel->address=$request->address;
        $vaccineModel->occupation=$request->occupation;
        $vaccineModel->phonenumber=$request->phonenumber;
        $vaccineModel->diseases=$request->diseases;
        $vaccineModel->comment=$request->comment;
        $save=$vaccineModel->save();

        if($save){
            return back()->with('success','Submitted detail successfully');
        }
        else{
            return back()->with('fail','Something error,Try again later');
        }


    }
}
