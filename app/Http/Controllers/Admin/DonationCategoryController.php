<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DonationCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DonationCategoryController extends Controller
{
    public function index() {
        $categories = DonationCategory::all();

        return view('admin.donation', compact('categories'));
    }

    public function store(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        DonationCategory::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return redirect()->route('admin.donations.index')->with('success', 'Category created successfully.');
    }

    public function update(Request $request, string $id) {
        $category = DonationCategory::findOrFail($id);

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $category->update([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return redirect()->route('admin.donations.index')->with('success', 'Category updated successfully.');
    }

    public function show(string $id) {
        $category = DonationCategory::findOrFail($id);
        return response()->json($category);
    }

    public function destroy(string $id) {
        $category = DonationCategory::findOrFail($id);
        $category->delete();

        return redirect()->route('admin.donations.index')->with('success', 'Category deleted successfully.');
    }
}
