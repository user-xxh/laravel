<?php

namespace App\Http\Controllers;

use App\Member;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function page()
    {
        $data = Member::paginate(1);
        return view('page', compact('data'));
    }
}
