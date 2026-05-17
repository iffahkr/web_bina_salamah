<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $table = 'activities';

    protected $fillable = ['title', 'description', 'location', 'date', 'time', 'image', 'activity_category_id'];

    public function category() {
        return $this->belongsTo(ActivityCategory::class, 'activity_category_id');
    }
}
