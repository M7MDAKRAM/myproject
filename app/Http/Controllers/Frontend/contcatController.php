<?php

namespace App\Http\Controllers\Frontend;

use App\Models\project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\contact;

class contcatController extends Controller
{
    public function index(){

        return view('frontend.contact');

    }
    public function delete($id)
    {
       $contact =  contact::find($id);
       $contact->delete();
        return redirect('/message')->with('status',"Data Deleted Sucessfully");
    }
    public function message(){
        $contact = contact::all();
        return view('admin.message',compact('contact'));

    }
    // public function send(){
    //     $contact = contact::all();
    //     return view('layouts.admin',compact('contact'));

    // }

    public function storee(Request $request){
        $contact = new contact();
        $contact->fullname = $request->name_c;
        $contact->email = $request->email_c;
        $contact->subject = $request->subject_c;
        $contact->message = $request->message_c;
        $contact->save();
        return redirect()->back();
    }
}
