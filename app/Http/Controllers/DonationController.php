<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDonateRequest;
use App\Models\Donation;
use Carbon\Carbon;

class DonationController extends Controller
{
    public function index()
    {
        $donations = Donation::paginate(10);
        $top = Donation::orderby('amount', 'desc')->first();
        $sum = Donation::sum('amount');
        $dateFinish = Carbon::now();
        $dateStart = Carbon::now()->startOfMonth();
        $month = Donation::whereBetween('created_at', [$dateStart, $dateFinish])->sum('amount');
        $widgetsData = [
            [
                'title' => 'Top donater:',
                'money' => $top->amount . '$',
                'name' => $top->name
            ],
            [
                'title' => 'Last month amount:',
                'money' => $month . '$',
            ],
                        [
                'title' => 'All time amount:',
                'money' => $sum . '$',
            ],

        ];
        return view('donation', compact('donations', 'top', 'sum', 'month', 'widgetsData'));
    }
    // 'Top donater' => '123457.00$'
    // ['Month amount' => '246788.24$'],
    // ['All time amount' => '246788.24$']

    public function create()
    {
        return view('donation_form');
    }

    public function store(StoreDonateRequest $request)
    {
        try {
            $donation = new Donation();
            $donation->name = $request->input('name');
            $donation->email = $request->input('email');
            $donation->amount = $request->input('amount');
            if ($request->filled('message')) {
                $donation->message = $request->input('message');
            }
            $donation->save();
            return redirect('/donations')
                ->with([
                    'status' => true,
                    'message' => 'Thank you for your donation!'
                ]);
        } catch (\Exception $e) {
            return redirect('/donations')
                ->with([
                    'status' => false,
                    'message' => $e->getMessage()
                ]);
        }
    }
}
