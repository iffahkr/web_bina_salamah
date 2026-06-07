<?php

namespace App\Http\Controllers;
use App\Models\ActivityCategory;
use Illuminate\Http\Request;

class ActivityHomeController extends Controller
{
    public function show($id)
    {
        $info = ActivityCategory::findOrFail($id);
        return view('info', ['info' => $info]);
    }
}
