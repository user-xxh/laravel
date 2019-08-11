<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class TestController extends Controller
{
    public function test()
    {
        dump(Input::get('addr', '北京市顺义区京顺路99号'));
        dump(Input::get('name'));
        dump(Input::all());
        dump(Input::only('gender'));
        dump(Input::except('age'));
    }

    public function test1()
    {
        return view('admin.test1');
    }

    public function test2()
    {
        return view('admin.test2');
    }
}