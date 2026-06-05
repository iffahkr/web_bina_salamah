<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class DonationController extends Controller
{
    public function index() {
        $donation = Donation::with('category')->get();

        if ($donation->isEmpty()) {
            return view('blank');
        }

        return view('admin.donation', compact('donation'));
    }

    public function store(Request $request) {
        $validate = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'phone_number' => 'required|integer|digits_between:10,15',
            'amount' => 'required|integer',
            'payment_method' => 'required|string|max:255',
            'date' => 'required|date',
            'time' => 'required|time',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'notes' => 'required|string|max:255',
            'donation_category_id' => 'required|exists:donation_categories,id',
        ]);
        if ($validate->fails()) {
            return view('blank');
        }

        $image_path = $request->file('image')->store('donations', 'public');

        $donation = Donation::create([
            'name' => $request->name,
            'phone_number' => $request->phone_number,
            'amount' => $request->amount,
            'payment_method' => $request->payment_method,
            'date' => $request->date,
            'time' => $request->time,
            'image' => $request->file('image')->hashName(),
            'notes' => $request->notes,
            'donation_category_id' => $request->donation_category_id,
        ]);

        return view('admin.donation', compact('donation'));
    }

    public function update(Request $request, $id) {
        $donation = Donation::findOrFail($id);
        if (!$donation) {
            return view('blank');
        }

        $validate = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'phone_number' => 'required|integer|digits_between:10,15',
            'amount' => 'required|integer',
            'payment_method' => 'required|string|max:255',
            'date' => 'required|date',
            'time' => 'required|time',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'notes' => 'required|string|max:255',
            'donation_category_id' => 'required|exists:donation_categories,id',
        ]);

        if ($validate->fails()) {
            return view('blank');
        }

        if ($request->hasFile('image')) {
            $image_path = $request->file('image')->store('donations', 'public');

            if ($donation->image) {
                Storage::disk('public')->delete(paths: 'donations/' . $donation->image);
            }

            $donation->image = $image_path->hashName();
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


        return view('admin.donation', compact('donation'));
    }

    public function show(string $id) {
        $donation = Donation::findOrFail($id);
        if (!$donation) {
            return view('blank');
        }

        return view('admin.donation', compact('donation'));
    }

    public function destroy(string $id) {
        $donation = Donation::findOrFail($id);
        if (!$donation) {
            return view('blank');
        }

        if ($donation->image) {
            Storage::disk('public')->delete(paths: 'donations/' . $donation->image);
        }

        $donation->delete();
        return view('admin.donation', compact('donation'));
    }
}
