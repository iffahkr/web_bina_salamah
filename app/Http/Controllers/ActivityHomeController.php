<?php

namespace App\Http\Controllers;
use App\Models\ActivityCategory;
use Illuminate\Http\Request;

class ActivityHomeController extends Controller
{
    public function show($id)
    {
        $activity = ActivityCategory::findOrFail($id);
        return view('frontend.activity.info', ['activity' => $activity]);
    }
}
