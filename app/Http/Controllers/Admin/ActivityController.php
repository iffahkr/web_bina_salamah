<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ActivityController extends Controller
{
    public function index()
    {
        $activity = Activity::with('category')->get();

        if ($activity->isEmpty()) {
            return view('blank');
        }

        return view('admin.activity', compact('activity'));
    }

    public function store(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'location' => 'required|string|max:255',
            'date' => 'required|date',
            'time' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'activity_category_id' => 'required|exists:activity_categories,id',
        ]);

        if ($validate->fails()) {
            return view('blank');
        }

        $image_path = $request->file('image')->store('activities', 'public');

        $activity = Activity::create([
            'name' => $request->name,
            'title' => $request->title,
            'description' => $request->description,
            'location' => $request->location,
            'date' => $request->date,
            'time' => $request->time,
            'image' => $image_path->hashName(),
            'activity_category_id' => $request->activity_category_id,
        ]);

        return view('admin.activity', compact('activity'));
    }

    public function update(Request $request, string $id)
    {
        $activity = Activity::findOrFail($id);
        if (!$activity) {
            return view('blank');
        }

        $validate = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'date' => 'required|date',
            'time' => 'required|time',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'activity_category_id' => 'required|exists:activity_categories,id',
        ]);

        if ($validate->fails()) {
            return view('blank');
        }

        if ($request->hasFile('image')) {
            $image_path = $request->file('image')->store('activities', 'public');
            if ($activity->image) {
                Storage::disk('public')->delete(paths: 'activities/' . $activity->image);
            }
            
            $activity->image = $image_path->hashName();
        }

        $activity->update([
            'name' => $request->name,
            'title' => $request->title,
            'description' => $request->description,
            'location' => $request->location,
            'date' => $request->date,
            'time' => $request->time,
            'activity_category_id' => $request->activity_category_id,
         ]);

         return view('admin.activity', compact('activity'));
    }

    public function show(string $id)
    {
        $activity = Activity::findOrFail($id);
        if (!$activity) {
            return view('blank');
        }

        return view('admin.activity', compact('activity'));
    }

    public function destroy(string $id)
    {
        $activity = Activity::findOrFail($id);
        if (!$activity) {
            return view('blank');
        }

        if ($activity->image) {
            Storage::disk('public')->delete(paths: 'activities/' . $activity->image);
        }

        $activity->delete();

        return view('admin.activity', compact('activity'));
    }
}
