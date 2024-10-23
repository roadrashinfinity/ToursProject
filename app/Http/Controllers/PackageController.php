<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Package;
use App\Models\Booking;
use Auth;

class PackageController extends Controller
{
    public function index()
    {
        return view('package');
    }
   
   
  public function store(Request $req)
    {
        
        $package= new Package();
        $package->package_name=$req->input('package_name');
        $package->package_type=$req->input('package_type');
        $package->package_location=$req->input('package_location');
       $package->package_price=$req->input('package_price');
        $package->package_features=$req->input('package_features');
        $package->package_details=$req->input('package_details');
        $package->package_link=$req->input('package_link');
        if($req->hasfile('package_image')){
            $file=$req->file('package_image');
            $extension=$file->getClientOriginalExtension();
            $filename=time() . '.' . $extension;
            $file->move('uploads/package/',$filename);
            $package->package_image=$filename;
        }else{
            return $req;
            $package->package_image = '';
        }
        
        
        $package->save();
        
        return back()->with('message','Inserted successfully',$package);
    }

    
    


        public function display()
        {
            $packages=package::all();
            return view('updatePackage')->with('packages',$packages);
           
        }


        public function edit($id)
        {
            $packages=package::find($id);
            return view('updateForm')->with('packages',$packages);
           
        }

        
        public function update(Request $req, $id)
        {
            $packages=package::find($id);
           
            $packages->package_name=$req->input('package_name');
            $packages->package_type=$req->input('package_type');
            $packages->package_location=$req->input('package_location');
            $packages->package_price=$req->input('package_price');
            $packages->package_features=$req->input('package_features');
            $packages->package_details=$req->input('package_details');
            $package->package_link=$req->input('package_link');
            if($req->hasfile('package_image')){
                $file=$req->file('package_image');
                $extension=$file->getClientOriginalExtension();
                $filename=time() . '.' . $extension;
                $file->move('uploads/package/',$filename);
                $packages->package_image=$filename;
           
        }
        $packages->save();
        return redirect('/updatePackage')->with('message','Updated successfully',$packages);
        
    }

       public function delete($id)
       {
           $packages=package::find($id);
           $packages->delete();

           return redirect('/updatePackage')->with('message','Deleted successfully',$packages);
           
       }

       public function index2($id)
       {
        $packages=package::find($id);
           return view('/bookTour')->with('packages',$packages);
       }
      

       public function addBooking(Request $req)
       {
           if(Auth::guest())
           {
               return redirect('/newlog');
           }
           $booking= new Booking();
          
           $booking->packages_id=$req->input('packages_id');
           $booking->packages_price=$req->input('package_price');
          $booking->user_id =Auth::user()->id;
          $booking->package_name=$req->input('package_name');
           $booking->from=$req->input('from');
           $booking->to=$req->input('to');
           $booking->adults=$req->input('adults');
           $booking->children=$req->input('children');
           $booking->email=$req->input('email');
           $booking->phone=$req->input('phone');
           
        
         /*   $booking->packages()->associate($package); */
           $booking->save();
         
           
           return back()->with('message','Booked successfully',$booking);
       }

       public function display2()
       {
           $bookings=Booking::all();
           return view('bookingDisplay')->with('bookings',$bookings);
          
       }

      

       public function edit2($id)
        {
            $bookings=Booking::find($id);
            return view('bookingForm')->with('bookings',$bookings);
           
        }

        public function update2(Request $req, $id)
        {
            $bookings=Booking::find($id);
           
            $bookings->status=$req->input('status');
           
            $bookings->save();
            return redirect('/bookingDisplay')->with('message','Updated successfully',$bookings);
        
        }
        public function viewTicket()
        {
            if(Auth::guest())
           {
               return redirect('/newlog');
           }
        
            $bookings = Booking::where('user_id', Auth::user()->id)->paginate(10);
           
            return view('historyDisplay')->with('bookings',$bookings);
        
        }

        public function delete2($id)
       {
           $bookings=Booking::find($id);
           $bookings->delete();

           return redirect('/historyDisplay')->with('message','Cancelled successfully',$bookings);
           
       }

       }
       
        

        
    

