<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use app\Models\User;
use app\Models\Product;
use app\Models\Cart;
class HomeController extends Controller
{

    public function index(){
        $product=Product::paginate(6);
        return view('home.userpage',compact('product'));
    }

    public function index2(){
        return view('home.userpage2');
    }
    public function redirect(){
        $usertype=Auth::user()->usertype;//getting userdata from db
        if($usertype=='1'){
            return view('admin.home');

        }
        else{
            $product=Product::paginate(6);
            return view('home.userpage',compact('product'));
        }
    }

    public function product_details($id)
    {   
        $product=product::find($id);
        return view('home.product_details',compact('product'));
    }

    public function add_cart(Request $request,$id)
    {   
        if(Auth::id())
        {
            $user=Auth::user();
            $product=product::find($id);
            $cart=new cart;
            $cart->name=$user->name;
            $cart->email=$user->email;
            $cart->phone=$user->phone;
            $cart->address=$user->address;
            $cart->user_id=$user->id;

            $cart->product_title=$product->title;
            if($product->discount_price!=null)
            {
                $cart->price=$product->discount_price * $request->quantity;
            }
            else
            {
                $cart->price=$product->price * $request->quantity;
            }
            
            $cart->image=$product->image;
            $cart->Product_id=$product->id;
            $cart->quantity=$request->quantity;

            $cart->save();

            return redirect()->back;
        }

        else{
            return redirect('login');
        }
    }

}
