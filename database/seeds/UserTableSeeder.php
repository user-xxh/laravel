<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user') -> insert([
            [
                'username'		=>	'张三',
                'sex'		    =>	'男',
                'age'		    =>  20,
                'phone'			=>	13224352342,
                'region'		=>	'北京市，北京市，顺义区'
            ],
            [
                'username'		=>	'李四',
                'sex'		    =>	'女',
                'age'		    =>  21,
                'phone'			=>	18434535634,
                'region'		=>	'北京市，北京市，顺义区'
            ],
            [
                'username'		=>	'王五',
                'sex'		    =>	'男',
                'age'		    =>  22,
                'phone'			=>	15356456563,
                'region'		=>	'北京市，北京市，顺义区'
            ],
        ]);
    }
}
