<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProceedingController extends Controller
{
    public function index()
    {
        $data['title'] = "Proceeding";
        return view('proceeding.index', $data);
    }

    public function show()
    {
        $data['title'] = "Proceeding";
        return view('proceeding.show', $data);
    }
}
