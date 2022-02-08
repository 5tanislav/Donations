<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donation;

class DonationController extends Controller
{
    public function index()
    {
        return view('donation');
    }

    public function showDonationForm()
    {
        return view('donation_form');
    }

    public function saveDonation(Request $request)
    {
        $donation = new Donation();
        $donation->name = $request->name;
        $donation->email = $request->email;
        $donation->amount = $request->amount;
        $donation->message = $request->message;
        $donation->save();
        return redirect('/')->with('status', 'Thank you for your donation!');
    }
}
