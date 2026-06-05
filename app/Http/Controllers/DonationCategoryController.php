<?php

namespace App\Http\Controllers;

use App\Models\DonationCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DonationCategoryController extends Controller
{
    public function index() {
        $categories = DonationCategory::all();
        if ($categories->isEmpty()) {
            return view('blank');
        }
        return view('admin.donation', compact('categories'));
    }

    public function store(Request $request) {
        $validate = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:255',
        ]);
        if($validate->fails()) {
            return view('blank');
        }

        $category = DonationCategory::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return view('admin.donation', compact('category'));
    }

    public function update(Request $request, string $id) {
        $category = DonationCategory::findOrFail($id);
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

        return view('admin.donation', compact('category'));
    }

    public function show(string $id) {
        $category = DonationCategory::findOrFail($id);
        if (!$category) {
            return view('blank');
        }
        
        return view('admin.donation', compact('category'));
    }

    public function destroy(string $id) {
        $category = DonationCategory::findOrFail($id);
        if (!$category) {
            return view('blank');
        }

        $category->delete();

        return view('admin.donation', compact('category'));
    }
}
