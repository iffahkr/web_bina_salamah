<?php

namespace App\Http\Controllers;

use App\Models\ActivityCategory;
use App\Models\Donation;

class HomeController extends Controller
{
    public function index() {
        $informations = ActivityCategory::all();
        $donations = Donation::with('category')->get();
        $totalDonators = Donation::count();
        $totalAmount = Donation::sum('amount');
        $totalCategories = ActivityCategory::count();

        return view('index', compact('informations', 'donations', 'totalDonators', 'totalAmount', 'totalCategories'));
    }
}
