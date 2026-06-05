<?php

namespace App\Http\Controllers;

use App\Models\ActivityCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class ActivityCategoryController extends Controller
{
    public function index() {
        $categories = ActivityCategory::all();

        if ($categories->isEmpty()) {
            return view('blank');
        }

        return view('admin.activity', compact('categories'));
    }

    public function store(Request $request) {
        $validate = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'category' => 'required|string|max:45',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if($validate->fails()) {
            return view('blank');
        }

        $image_path = $request->file('image')->store('activities', 'public');

        $category = ActivityCategory::create([
            'name' => $request->name,
            'description' => $request->description,
            'category' => $request->category,
            'image' => $request->file('image')->hashName(),
        ]);

        return view('admin.activity', compact('category'));
    }

    public function update(Request $request, string $id) {
        $category = ActivityCategory::findOrFail($id);
        if (!$category) {
            return view('blank');
        }

        $validate = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'category' => 'required|string|max:45',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);
        if($validate->fails()) {
            return view('blank');
        }

        if ($request->hasFile('image')) {
            $image_path = $request->file('image')->store('activities', 'public');

            if ($category->image) {
                Storage::disk('public')->delete(paths: 'activities/' . $category->image);
            }

            $category->image = $image_path->hashName();
        }

        $category->update([
            'name' => $request->name,
            'description' => $request->description,
            'category' => $request->category,
        ]);

        return view('admin.activity', compact('category'));
    }

    public function show(string $id) {
        $categories = ActivityCategory::findOrFail($id);
        if (!$categories) {
            return view('blank');
        }

        return view('admin.activity', compact('categories'));
    }

    public function destroy(string $id) {
        $category = ActivityCategory::findOrFail($id);
        if (!$category) {
            return view('blank');
        }

        if ($category->image) {
            Storage::disk('public')->delete(paths: 'activities/' . $category->image);
        }

        $category->delete();
        return view('admin.activity', compact('category'));
    }

}
