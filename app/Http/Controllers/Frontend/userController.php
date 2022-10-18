<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class userController extends Controller
{
    public function user(){
        $users = User::all();
        return view('admin.users',compact('users'));
    }
    public function delete($id)
    {
       $users =  User::find($id);
       $users->delete();
       return redirect('/users')->with('status',"Data Deleted Sucessfully");
    }
}
