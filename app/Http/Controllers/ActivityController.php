<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function show($id)
    {
        //
    }

}
