<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test()
    {
        phpinfo();
    }

    public function add()
    {
        $data = [
            'name' => '王五',
            'age' => '25',
            'email' => 'wangwu@qq.com'
        ];
        dump(\DB::table('member')->insertGetId($data));
    }

    public function mod()
    {
        $data = ['name' => '张三丰'];
//        dump(\DB::table('member')->where('id', '=', 1)->update($data));
//        dump(\DB::table('member')->increment('age',5));
        dump(\DB::table('member')->decrement('age'));
    }

    public function select()
    {
//        $data = \DB::table('member') -> where('id', '>', 2) -> where('age', '>', 22) -> get();
//        foreach ($data as $val) {
//            echo $val->id . $val->name . $val->age . $val->email . '<br>';
//        }
//        $data = \DB::table('member') -> where('id', '>', 2) -> first();
//        $data = \DB::table('member') -> where('id', 2) -> value('name');
//        $data = \DB::table('member') -> select('name', 'age', 'email') -> get();
        $data = \DB::table('member') -> orderBy('age', 'desc') -> get();
        dump($data);
    }

    public function del()
    {
        $res = \DB::table('member') -> where('id', 1) -> delete();
        dump($res);
    }
}
