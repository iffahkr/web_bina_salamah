<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ActivityCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ActivityCategoryController extends Controller
{
    public function index() {
        return redirect()->route('admin.activities.index');
    }

    public function store(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'category' => 'required|string|max:45',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
          ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $image = $request->file('image');
        $imageName = $image->hashName();
        $image->storeAs('activities', $imageName, 'public');

        ActivityCategory::create([
            'name' => $request->name,
            'description' => $request->description,
            'category' => $request->category,
            'image' => $imageName,
        ]);

        return redirect()->route('admin.activities.index')->with('success', 'Category created successfully.');
    }

    public function update(Request $request, string $id) {
        $category = ActivityCategory::findOrFail($id);

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'category' => 'required|string|max:45',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = $image->hashName();
            $image->storeAs('activities', $imageName, 'public');

            if ($category->image) {
                Storage::disk('public')->delete('activities/' . $category->image);
            }

            $category->image = $imageName;
        }

        $category->update([
            'name' => $request->name,
            'description' => $request->description,
            'category' => $request->category,
        ]);

        return redirect()->route('admin.activities.index')->with('success', 'Category updated successfully.');
    }

    public function show(string $id) {
        $category = ActivityCategory::findOrFail($id);
        return response()->json($category);
    }

    public function destroy(string $id) {
        $category = ActivityCategory::findOrFail($id);

        if ($category->image) {
            Storage::disk('public')->delete('activities/' . $category->image);
        }

        $category->delete();
        return redirect()->route('admin.activities.index')->with('success', 'Category deleted successfully.');
    }
}
