<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Donation;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        $activities = Activity::with('category')->get();
        $donations = Donation::with('category')->get();

        return view('admin.dashboard', compact('activities', 'donations'));
    }
}
