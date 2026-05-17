<?php

namespace Database\Seeders;

use App\Models\Donation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DonationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Donation::create([
            'name' => 'John Doe',
            'phone_number' => '1234567890',
            'amount' => 100.00,
            'payment_method' => 'Credit Card',
            'date' => '2026-05-01',
            'time' => '10:33',
            'notes' => 'This is a test donation.',
            'donation_category_id' => 1, // Assuming category with ID 1 exists
        ]);
    }
}
