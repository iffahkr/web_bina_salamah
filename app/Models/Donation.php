<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    protected $table = 'donations';
    protected $fillable = ['name', 'phone_number', 'amount', 'payment_method', 'date', 'time', 'image', 'notes', 'donation_category_id'];

    public function category() {
        return $this->belongsTo(DonationCategory::class, 'donation_category_id');
    }
}
