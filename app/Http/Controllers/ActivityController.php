<?php

namespace App\Http\Controllers;
use App\Models\Activity;

class ActivityController extends Controller
{

    public function index()
    {
        $activities = Activity::all();
        return view('frontend.activity.index', compact('activities'));
    }

    public function show($id)
    {
        $activity = Activity::findOrFail($id);
        return view('frontend.activity.activity', ['activity' => $activity]);
    }

}
