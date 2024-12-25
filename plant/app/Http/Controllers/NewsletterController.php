<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscription;
use Illuminate\Support\Facades\Mail;


class NewsletterController extends Controller
{
    public function subscribe(Request $request)
    {
        // Validate the email address
        $request->validate([
            'email' => 'required|email|unique:subscriptions,email', // Assuming you're storing emails in a 'subscriptions' table
        ]);

        //Store the email in the database (optional)
        Subscription::create([
            'email' => $request->input('email'),
        ]);

        //Send a confirmation email (optional)
        Mail::to($request->input('email'))->send(new NewsletterSubscription());

        return redirect()->back()->with('success', 'You have successfully subscribed!');
    }
}
