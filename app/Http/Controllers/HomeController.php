<?php

namespace App\Http\Controllers;

use App\Models\ActivityCategory;
use App\Models\Donation;

class HomeController extends Controller
{
    public function index() {
        $informations = ActivityCategory::all();
        $donations = Donation::with('category')->get();

        return view('frontend.index', compact('informations', 'donations'));
    }
}
