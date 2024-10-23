<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Package;
class ViewController extends Controller
{
   

   
   public function viewPackage(){
    $packages = Package::all();

    return view('view',['packages' => $packages]);
}


public function detail($id){

    
    $data = Package::find($id);

    return view('detail',['packages'=>$data]);
    
}
}
