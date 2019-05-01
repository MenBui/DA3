<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([[
        	'name'=>'Bùi Thị Mến',
        	'email'=>'menbt@gmail.com',
        	'password'=>Hash::make('123456'),
        	'phone'=>'0346250424',
        	'cmnd'=>'113889776',
        	'date'=>Carbon::create('2000', '01', '01'),
        	'address'=>'ktx',
        	'sex'=>'0',
        	'role'=>'0'
        ],
        [
            'name'=>'Nguyễn Văn A',
        	'email'=>'A@gmail.com',
        	'password'=>Hash::make('123456'),
        	'phone'=>'0126789665',
        	'cmnd'=>'113778994',
        	'date'=>Carbon::create('2000', '01', '01'),
        	'address'=>'Hà Nội',
        	'sex'=>'1',
        	'role'=>'1'	
        ]
        ]);
    }
}
