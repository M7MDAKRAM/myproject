<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\contact;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //  public function home(){

    //     return view('admin.dashboard');

    //  }
     public function redirect(){

     $usertype = Auth::user()->usertype;
     $contact=contact::all();
     if($usertype =='1'){

         return view('admin.dashboard',compact("usertype","contact"));
     }else{

        return view('frontend.index',compact("usertype","contact"));
     }
     }
}

