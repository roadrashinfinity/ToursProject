<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;
use App\Models\Booking;
use Auth;

class PaymentController extends Controller
{
    public function index($id)
    {
        $bookings=Booking::find($id);
           return view('/payment')->with('bookings',$bookings);
       
    }
   
    public function addPayment(Request $req)
    {
        if(Auth::guest())
        {
            return redirect('/newlog');
        }
        $payment= new Payment();
       
        $payment->booking_id=$req->input('booking_id');
       
       $payment->user_id =Auth::user()->id;
       $payment->card_no=$req->input('card_no');
        $payment->cardholder_name=$req->input('cardholder_name');
        $payment->expiry_date=$req->input('expiry_date');
        $payment->package_price=$req->input('package_price');
        
    
        $payment->save();
      
        
        return back()->with('message','Payment successfully done!',$payment);
    }
}
