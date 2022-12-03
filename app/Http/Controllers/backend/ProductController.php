<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\products;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function listi(){
        //dd('hello');
        return view('backend.page.product');
    }
    public function create(){
        //dd('hello');
        return view('backend.page.productForm');
    }
    
    public function submit(Request $request){
        //dd($request all());

         products::create([

             'first-name'=>$request->first_name,
              'last-name'=>$request->last_name,

         ]);
        // return redirect()->route('product.list');
         return redirect()->back();


    }

}