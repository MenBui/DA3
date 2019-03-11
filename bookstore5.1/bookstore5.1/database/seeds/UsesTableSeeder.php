<?php

use Illuminate\Database\Seeder;

class UsesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
DB::table('users')->insert([[
	'name'=>'Nguyễn Hoài Heo',
	'email'=>'heo@gmail.com',
	'password'=>Hash::make('123456')
],[
	'name'=>'Bùi Thị Heo Ù',
	'email'=>'heoU@gmail.com',
	'password'=>Hash::make('123456')
]
]
        );
    }
}
