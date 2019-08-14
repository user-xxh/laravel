<?php

namespace App\Http\Controllers\model;

use App\Member;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/**
 * Class Model
 * @package App\Http\Controllers\model
 */
class Model extends Controller
{
    public function test()
    {
        return view('model.form');
    }

    public function model_add(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:member|min:2|max:20',
            'age' => 'required|integer|min:1|max:100',
            'email' => 'required|email',
            'yzm' => 'required|captcha'
        ]);
        if ($request -> hasFile('touxiang') && $request -> file('touxiang') -> isValid()) {
            $filename = md5(time() . rand(100000,900000)) . '.' . $request -> file('touxiang') ->extension();
            $request -> file('touxiang') -> move('./statics/upload', $filename);
            $filepath = '/statics/upload/' . $filename;
        }
        $data = $request -> except('_token', 'touxiang');
        $data['avatar'] = isset($filepath) ? $filepath : '';
        $res = Member::insert($data);
        return $res ? 'OK' : 'Fail';
//        $model = new Member();
//        $res = Member::create($request -> all());
//        $res = Member::insert($request -> except('_token'));
//        dump($res);
    }

    public function add()
    {
        $model = new Member();
        $model -> name = 'xxh';
        $model -> age = 22;
        $model -> email = 'user_xxh@163.com';
        $res = $model -> save();dd($res);
    }

    public function del()
    {
//        $data = Member::find(4);
//        return $data -> delete() ? 'OK' : 'NO OK';
        $res = Member::where('id', 6) -> delete();
        dump($res);
    }

    public function mod()
    {
//        $data = Member::find(3);
//        $data -> name = '王麻子';
//        return $data -> save() ? 'OK' : 'No OK';
        $res = Member::where('id', 4) -> update(['age' => 24]);
        dump($res);
    }

    public function select()
    {
//        $data = Member::find(4) -> toArray();
//        $data = Member::all();
//        $data = Member::get();
//        $data = Member::where('id', '>', 2) -> get();
        $data = Member::where('id', '>', 3) -> select('name', 'email') -> get();
        dd($data);
    }
}
