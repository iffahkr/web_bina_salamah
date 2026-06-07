<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Donation;
use App\Models\DonationCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class DonationController extends Controller
{
    public function index()
    {
        $donations = Donation::with('category')->get();
        $categories = DonationCategory::all();

        return view('admin.donation', compact('donations', 'categories'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'phone_number' => 'required|string|max:15',
            'amount' => 'required|integer|min:1',
            'payment_method' => 'required|string|max:255',
            'date' => 'required|date',
            'time' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'notes' => 'nullable|string|max:255',
            'donation_category_id' => 'required|exists:donation_categories,id',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $image = $request->file('image');
        $imageName = $image->hashName();
        $image->storeAs('donations', $imageName, 'public');

        Donation::create([
            'name' => $request->name,
            'phone_number' => $request->phone_number,
            'amount' => $request->amount,
            'payment_method' => $request->payment_method,
            'date' => $request->date,
            'time' => $request->time,
            'image' => $imageName,
            'notes' => $request->notes,
            'donation_category_id' => $request->donation_category_id,
        ]);

        return redirect()->route('admin.donations.index')->with('success', 'Donation recorded successfully.');
    }

    public function update(Request $request, string $id)
    {
        $donation = Donation::findOrFail($id);

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'phone_number' => 'required|string|max:15',
            'amount' => 'required|integer|min:1',
            'payment_method' => 'required|string|max:255',
            'date' => 'required|date',
            'time' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'notes' => 'nullable|string|max:255',
            'donation_category_id' => 'required|exists:donation_categories,id',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = $image->hashName();
            $image->storeAs('donations', $imageName, 'public');

            if ($donation->image) {
                Storage::disk('public')->delete('donations/' . $donation->image);
            }

            $donation->image = $imageName;
        }

        $donation->update([
            'name' => $request->name,
            'phone_number' => $request->phone_number,
            'amount' => $request->amount,
            'payment_method' => $request->payment_method,
            'date' => $request->date,
            'time' => $request->time,
            'notes' => $request->notes,
            'donation_category_id' => $request->donation_category_id,
        ]);

        return redirect()->route('admin.donations.index')->with('success', 'Donation updated successfully.');
    }

    public function show(string $id)
    {
        $donation = Donation::findOrFail($id);
        return response()->json($donation);
    }

    public function destroy(string $id)
    {
        $donation = Donation::findOrFail($id);

        if ($donation->image) {
            Storage::disk('public')->delete('donations/' . $donation->image);
        }

        $donation->delete();

        return redirect()->route('admin.donations.index')->with('success', 'Donation deleted successfully.');
    }
}
