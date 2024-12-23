<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;

use App\Models\Cart;
use App\Models\Order;
use Session;
use Stripe;




class HomeController extends Controller
{

    public function index(){
        $product= Product::paginate(6);
        return view('home.userpage',compact('product'));
    }

    public function index2(){
        return view('home.userpage2');
    }

    public function blog(){
        return view('home.home2.blog');
    }

    //about page
    public function about(){
        return view('home.home2.about');
    }
    public function redirect(){
        $usertype=Auth::user()->usertype;//getting userdata from db
        if($usertype=='1'){
            return view('admin.home');

        }
        else{


            return view('home.userpage2');
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

            return redirect()->back();
        }

        else{
            return redirect('login');
        }
    }

    public function show_cart(){
        if(Auth::id()){
            $id=Auth::user()->id;
        $cart=cart::where('user_id',$id)->get();
        return view('home.showcart',compact('cart'));
        }else{
            return redirect('login');
        }

    }

    public function remove_cart($id){
        $cart=cart::find($id);
        $cart->delete();
        return redirect()->back();
    }




    //cash on delivery
    public function cash_order(){
        $user = Auth::user();
        $userid=$user->id;


        $data=cart::where('user_id','=',$userid)->get();
    foreach($data as $data){
        $order=new order;
        $order->name=$data->name;
        $order->email=$data->email;
        $order->phone=$data->phone;
        $order->address=$data->address;
        $order->user_id=$data->user_id;
        $order->product_title=$data->product_title;
        $order->price=$data->price;
        $order->quantity=$data->quantity;
        $order->image=$data->image;
        $order->product_id=$data->Product_id;

        $order->payment_status='Cash on Delivery';
        $order->delivery_status='processing';

        $order->save();


        //delete item after proceed
        $cart_id =$data->id;
        $cart =cart::find($cart_id);
        $cart->delete();


    }
    return redirect()->back()->WITH('message', 'We have received your Order,we will connect you soon.......thank you shop with us');
 }


 //handle stripeview
 public function stripe($totalprice){
    return view('home.stripe',compact('totalprice'));
}


//post stripe
public function stripePost(Request $request,$totalprice)

    {

        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));



        Stripe\Charge::create ([

                "amount" => $totalprice * 100,

                "currency" => "usd",

                "source" => $request->stripeToken,

                "description" => "Thanks for the Payment"

        ]);



        Session::flash('success', 'Payment successful!');



        return back();

    }

    

}


