<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Models\NewsletterSubscriber;
use session;

class NewsletterController extends Controller
{
    public function subscribers(){
        Session::put('page','Subscribers');
        $subscribers=NewsletterSubscriber::get()->toArray();
        dd($subscribers);
    }

}
