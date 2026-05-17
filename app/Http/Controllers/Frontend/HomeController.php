<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Donation;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $activities = Activity::with('category')->get();
        $donations = Donation::with('category')->get();

        return view('frontend.home', compact('activities', 'donations'));
    }
}
