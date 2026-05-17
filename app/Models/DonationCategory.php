<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DonationCategory extends Model
{
    protected $table = 'donation_categories';
    protected $fillable = ['name', 'description'];
}
