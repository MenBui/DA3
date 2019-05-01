<?php

use Illuminate\Database\Seeder;

class AuthorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('authors')->insert([[
        	'name'=>'Sơn Tùng'
        ],
        [
        	'name'=>'Xuân Diệu'
        ],
        [
        	'name'=>'Nguyễn Nhật Ánh'
        ],
        [
        	'name'=>'Nguyễn Du'
        ]
    ]);
    }
}
