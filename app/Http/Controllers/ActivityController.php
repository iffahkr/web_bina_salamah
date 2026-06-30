<?php

namespace App\Http\Controllers;
use App\Models\Activity;

class ActivityController extends Controller
{

    public function index()
    {
        $activities = Activity::get();
        return view('activity.index', compact('activities'));
    }

    public function show($id)
    {
        $activity = Activity::findOrFail($id);

        $relatedActivities = Activity::where('id', '!=', $activity->id)
            ->latest()
            ->take(3)
            ->get();

        return view('activity.activity', [
            'activity' => $activity,
            'relatedActivities' => $relatedActivities,
        ]);
    }

}
