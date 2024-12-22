<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Catagory;
use App\Models\Product;



class AdminController extends Controller
{


    //view catagory
    public function view_catagory()
    {
        $data=catagory::all();
        return view('admin.catagory',compact('data'));
    }



//store catogory
public function add_catagory(Request $request )
    {
        $data=new catagory;
        $data->catagory_name=$request->catagory;

        $data->save();

        return redirect()->back()->with('message','catagory Added Successfully');
    }


    //delete catory
    public function delete_catagory($id)
    {
        $data=catagory::find($id);
        $data->delete();
        return redirect()->back()->with('message','catagory Deleted Successfully');
    }








    //viewproduct function
    public function view_product(){

        $catagory = Catagory::all();
        return view('admin.product',compact('catagory'));
    }



    public function add_product(Request $request){

        $product = new Product;
        $product->title=$request->title;
        $product->description=$request->description;
        $product->price=$request->price;
        $product->quantity=$request->quantity;
        $product->discount_price=$request->discount_price;
        $product->catagory=$request->catagory;


        $image=$request->image;
        $imagename=time().'.'.$image->getclientOriginalExtension();
        $request->image->move('product',$imagename);

        $product->image=$imagename;

        $product->save();

        return redirect()->back();






    }
}
