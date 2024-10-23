<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class contactController extends Controller
{
    function save(Request $req){

        $contact = new Contact;
        $contact->user_id =Auth::user()->id;
        $contact->name = $req->name;
        $contact->email = $req->email;
        $contact->subject = $req->subject;
        $contact->message = $req->message;

        $contact->save();
        return back()->with('message','Enquiry Submitted successfully',$contact);
     }

     public function display()
        {
            
            $contacts=Contact::all();
            return view('displayEnquiry')->with('contacts',$contacts);
           
        }

    public function reply($id)
        {
            $contacts=Contact::find($id);
            return view('displayReply')->with('contacts',$contacts);
           
        }

        public function update(Request $req, $id)
        {
            $contacts=Contact::find($id);
           
            $contacts->reply=$req->input('reply');
           
            $contacts->save();
            return redirect('displayEnquiry')->with('message','Replied successfully',$contacts);
        
        }

        public function view()
        {
            if(Auth::guest())
            {
                return redirect('/newlog');
            }
           
            $contacts = Contact::where('user_id', Auth::user()->id)->paginate(10);
           
            return view('viewReply')->with('contacts',$contacts);
        }
    
}
