<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\catagory;
use Illuminate\Http\Request;

class CatagoryController extends Controller
{
    public function list(){
       // dd('hello');
        return view('backend.page.catagory');
    }
    public function create(){
        
         return view('backend.page.form');
     }
   
     public function submit(Request $request){
        //dd($request all());

         catagory::create([

             'Email_address'=>$request->email_address,
              'Password'=>$request->password,

         ]);
        // return redirect()->route('catagory.list');
         return redirect()->back();
}
}