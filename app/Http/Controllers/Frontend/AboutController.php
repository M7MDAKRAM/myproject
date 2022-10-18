<?php

namespace App\Http\Controllers\Frontend;

use App\Models\about;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    public function index(){

        $about = about::all();
        return view('frontend.about',compact('about'));


    }
    public function social(){

        return view('admin.socialmedia');

    }
    public function showsocial(){
        $about = about::all();
        return view('admin.showsocial',compact('about'));

    }
    public function stoore(Request $request){

        $about= new about();
        $about->facebook = $request->facebook_s;
        $about->instagram = $request->instagram_s;
        $about->twitter = $request->twitter_s;
        $about->save();
         return redirect()->back();
        return view('admin.socialmedia');

    }
    public function rremove($id)
    {
       $about =  about::find($id);
       $about->delete();
       return redirect('/showsocial')->with('status',"Data Deleted Sucessfully");
    }
    public function eedit($id)
    {
        $about = about::find($id);
        return view('admin.editsocial',compact('about'));
    }
    public function uupdate(Request $request ,$id)
    {
        $about = about::find($id);
        $about->facebook = $request->facebook_s;
        $about->twitter = $request->twitter_s;
        $about->instagram = $request->instagram_s;
        $about->update();
        return redirect('/showsocial')->with('status',"Data Update Sucessfully");
    }

}
