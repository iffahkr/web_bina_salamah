<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Activity;
use App\Models\Donation;

class DashboardController extends Controller
{
    public function index()
    {
        $totalDonationFund = Donation::sum('amount');
        $totalDonators = Donation::count();
        $totalActivities = Activity::count();

        $recentActivities = Activity::with('category')->latest()->take(5)->get();
        $recentDonations = Donation::with('category')->latest()->take(5)->get();

        return view('admin.dashboard', compact(
            'totalDonationFund',
            'totalDonators',
            'totalActivities',
            'recentActivities',
            'recentDonations'
        ));
    }
}
