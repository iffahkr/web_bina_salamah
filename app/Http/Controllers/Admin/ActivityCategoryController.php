<?php

namespace App\Http\Controllers;

use App\Models\ActivityCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
        ]);

        if($validate->fails()) {
            return view('blank');
        }

        $category = ActivityCategory::create([
            'name' => $request->name,
            'description' => $request->description,
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
        ]);
        if($validate->fails()) {
            return view('blank');
        }

        $category->update([
            'name' => $request->name,
            'description' => $request->description,
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

        $category->delete();
        return view('admin.activity', compact('category'));
    }

}
