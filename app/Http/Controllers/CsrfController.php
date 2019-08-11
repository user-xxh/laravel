<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class CsrfController extends Controller
{
    public function form()
    {
        return view('form');
    }

    public function csrf()
    {
        $data = Input::all();
        return view('success', compact('data'));
    }
}
