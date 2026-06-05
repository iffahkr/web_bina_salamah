<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\ActivityCategory;
use App\Models\Donation;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $activities = ActivityCategory::all();
        $donations = Donation::with('category')->get();

        return view('frontend.index', compact('activities', 'donations'));
    }
}
