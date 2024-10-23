<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Package;
use App\Models\User;
use App\Models\Booking;
use DB;

class DashboardController extends Controller
{
    public function index(){
        if(Auth::user()->hasRole('user')){
            return view('home2');
    }elseif(Auth::user()->hasRole('admin')){
        $data1 = DB::table('packages')->count();
        $data2=DB::table('users')->count();
        $data3=DB::table('booking')->count();
        return view('dashboard',compact('data1','data2','data3'));
        }
    
    }
}