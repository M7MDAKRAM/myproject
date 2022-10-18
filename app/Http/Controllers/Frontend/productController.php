<?php

namespace App\Http\Controllers\Frontend;
use App\Models\contact;
use App\Models\project;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class productController extends Controller
{
    public function index(){
        $usertype = Auth::user()->usertype;
        $product = project::all();

        return view('frontend.products',compact('product',"usertype"));

    }
    public function order(){

        return view('admin.order');

    }

    public function create(){

        return view('admin.create');

    }
    public function search(Request $request){

        $search = $request->search;
        $product = project::where('name','Like','%'.$search.'%')->get();
        return view('frontend.products',compact('product'));

    }
    public function searchproduct(Request $request){

        $search = $request->search;
        $products = project::where('type','Like','%'.$search.'%')->get();
        return view('admin.allproducts',compact('products'));

    }
    public function allproducts(){
        $products = project::all();
        $contact=contact::all();
        return view('admin.allproducts',compact('products','contact'));

    }
    public function remove($id)
    {
       $product =  project::find($id);
       $product->delete();
       return redirect('/allproducts')->with('status',"Data Deleted Sucessfully");
    }
    public function edit($id)
    {
        $product = project::find($id);
        return view('admin.edit',compact('product'));
    }
    public function update(Request $request ,$id)
    {
         $product = project::find($id);
         if($request->image_pro){
            $imagename = time().'.'.$request->image_pro->extension();
            $request->image_pro->move(public_path('images'),$imagename);
            $product->image = $imagename;
        }

        $product->name = $request->product_name;
        $product->price = $request->product_price;
        $product->quantity = $request->product_qty;
        $product->description = $request->product_des;
        $product->type = $request->product_typ;
        $product->update();
        return redirect('/allproducts')->with('status',"Data Update Sucessfully");
    }
    public function store(Request $request){

         $product = new project();
         if($request->image_pro){
             $imagename = time().'.'.$request->image_pro->extension();
             $request->image_pro->move(public_path('images'),$imagename);
             $product->image = $imagename;
         }

         $product->name = $request->product_name;
         $product->price = $request->product_price;
         $product->quantity = $request->product_qty;
         $product->description = $request->product_des;
         $product->type = $request->product_typ;
         $product->save();
         return redirect()->back();
    }


    public function viewmen(){
        $product=project::where('type','men')->get();
        return view('frontend.products',compact('product'));
    }
    public function viewwoman(){
        $product=project::where('type','woman')->get();
        return view('frontend.products',compact('product'));
    }
}
