<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use app\Models\User;

use Session;
use Stripe;
class HomeController extends Controller
{

    public function index(){
        return view('home.userpage');
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
            return view('home.userpage2');
        }
    }


    public function stripe($totalprice){
        return view('home.stripe',compact('totalprice'));
    }

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
