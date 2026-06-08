<?php

namespace App\Http\Controllers;

use App\Models\ActivityCategory;
use App\Models\Donation;

class AboutController extends Controller
{
    public function index() {
        $totalDonators = Donation::count();
        $totalCategories = ActivityCategory::count();

        return view('about', compact('totalDonators', 'totalCategories'));
    }
}
