<?php

use Illuminate\Database\Seeder;

class PaperTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('paper') -> insert([
            [
                'paper_name'		=>	'小学1年级PHP考试',
                'total_score'		=>	'100',
                'start_time'		=>	time() + 86400,
                'duration'			=>	100,
                'status'			=>	rand(1,2)
            ],
            [
                'paper_name'		=>	'小学1年级C考试',
                'total_score'		=>	'100',
                'start_time'		=>	time() + 86400,
                'duration'			=>	100,
                'status'			=>	rand(1,2)
            ],
            [
                'paper_name'		=>	'小学1年级P++考试',
                'total_score'		=>	'100',
                'start_time'		=>	time() + 86400,
                'duration'			=>	100,
                'status'			=>	rand(1,2)
            ],
        ]);
    }
}
