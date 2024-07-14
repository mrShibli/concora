<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NewsletterEmail;

class NewsletterSubscribeController extends Controller
{
    public function store(Request $request)
    {
       // Validate request data
        // $request->validate([
        // 'email' => 'required|email|unique:newsletter_emails',
        // ]);

        // Create subscriber 

        $subscription = new NewsletterEmail();
        $subscription->news_email = $request->news_email;
        $subscription->save();


    return response()->json(['success' => 'Subscription successful'], 200);
    }
}
