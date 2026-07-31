<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Activity;
use App\Models\ActivityCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ActivityController extends Controller
{
    public function index()
    {
        $activities = Activity::with('category')->get();
        $categories = ActivityCategory::all();

        return view('admin.activity', compact('activities', 'categories'));
    }

    public function create()
    {
        $categories = ActivityCategory::all();

        return view('admin.activity.create', compact('categories'))->with('mode', 'activity');
    }

    public function edit(string $id)
    {
        $activity = Activity::findOrFail($id);
        $categories = ActivityCategory::all();

        return view('admin.activity.edit', compact('activity', 'categories'))->with('mode', 'activity');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'location' => 'required|string|max:255',
            'date' => 'required|date',
            'time' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'activity_category_id' => 'required|exists:activity_categories,id',
        ],
        [
            'image.required' => 'Silakan pilih gambar.',
            'image.image' => 'File harus berupa gambar.',
            'image.mimes' => 'Format gambar harus JPG, JPEG, atau PNG.',
            'image.max' => 'Ukuran gambar maksimal 2 MB.'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $image = $request->file('image');
        $imageName = $image->hashName();
        $image->storeAs('activities', $imageName, 'public');

        Activity::create([
            'title' => $request->title,
            'description' => $request->description,
            'location' => $request->location,
            'date' => $request->date,
            'time' => $request->time,
            'image' => $imageName,
            'activity_category_id' => $request->activity_category_id,
        ]);

        return redirect()->route('admin.activities.index')->with('success', 'Activity created successfully.');
    }

    public function update(Request $request, string $id)
    {
        $activity = Activity::findOrFail($id);

        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'location' => 'required|string|max:255',
            'date' => 'required|date',
            'time' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'activity_category_id' => 'required|exists:activity_categories,id',
        ],
        [
            'image.image' => 'File harus berupa gambar.',
            'image.mimes' => 'Format gambar harus JPG, JPEG, atau PNG.',
            'image.max' => 'Ukuran gambar maksimal 2 MB.'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = $image->hashName();
            $image->storeAs('activities', $imageName, 'public');

            if ($activity->image) {
                Storage::disk('public')->delete('activities/' . $activity->image);
            }

            $activity->image = $imageName;
        }

        $activity->update([
            'title' => $request->title,
            'description' => $request->description,
            'location' => $request->location,
            'date' => $request->date,
            'time' => $request->time,
            'activity_category_id' => $request->activity_category_id,
        ]);

        return redirect()->route('admin.activities.index')->with('success', 'Activity updated successfully.');
    }

    public function show(string $id)
    {
        $activity = Activity::findOrFail($id);
        return response()->json($activity);
    }

    public function destroy(string $id)
    {
        $activity = Activity::findOrFail($id);

        if ($activity->image) {
            Storage::disk('public')->delete('activities/' . $activity->image);
        }

        $activity->delete();

        return redirect()->route('admin.activities.index')->with('success', 'Activity deleted successfully.');
    }
}
