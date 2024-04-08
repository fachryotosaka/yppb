<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class NewsLetterController extends Controller
{
    public function subscribe(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|email',
        ]);

        // Kirim email
        Mail::raw('Thank you for subscribing!', function ($message) use ($request) {
            $message->to($request->email)
                    ->subject('Subscription Confirmation');
        });

        // Redirect kembali dengan pesan sukses
        return redirect()->back()->with('success', 'Thank you for subscribing!');
    }
}
