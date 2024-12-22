<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;


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


}
