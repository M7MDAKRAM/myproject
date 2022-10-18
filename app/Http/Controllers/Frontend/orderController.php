<?php

namespace App\Http\Controllers\Frontend;

use App\Models\project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\order;

class orderController extends Controller
{
    public function order(){

        return view('frontend.push');

    }
    public function allorders(){
        $orders = order::all();
        return view('admin.order',compact('orders'));

    }
    public function deelete($id)
    {
       $orders =  order::find($id);
       $orders->delete();
        return redirect('/order')->with('status',"Data Deleted Sucessfully");
    }
    public function ediit($id)
    {
        $order = order::find($id);
        return view('admin.editorder',compact('order'));
    }
    public function updatee(Request $request ,$id)
    {
         $order = order::find($id);
         $order->name = $request->customer_name;
         $order->location = $request->customer_loc;
         $order->phone = $request->phone_num;
         $order->pro_name = $request->product_name;
         $order->quantity = $request->product_qty;
         $order->remark = $request->customer_remark;
         $order->update();
         return redirect('/order')->with('status',"Data Update Sucessfully");
    }
    public function save(Request $request){

        $order = new order();
        $order->name = $request->customer_name;
        $order->location = $request->customer_loc;
        $order->phone = $request->phone_num;
        $order->pro_name = $request->product_name;
        $order->quantity = $request->product_qty;
        $order->remark = $request->customer_remark;
        $order->save();
        return redirect()->back();

   }

}
