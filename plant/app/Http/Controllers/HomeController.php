<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use app\Models\User;
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


}
