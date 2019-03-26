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
        DB::table('users')->insert([[
        	'name'=>'Bùi Thị Mến',
        	'email'=>'menbt@gmail.com',
        	'password'=>Hash::make('123456'),
        	'phone'=>'0346250424',
        	'cmnd'=>'113889776',
        	'date'=>'12/01/1998',
        	'address'=>'ktx',
        	'sex'=>'femail',
        	'role'=>'0'
        ],
        [
            'name'=>'Nguyễn Văn A',
        	'email'=>'A@gmail.com',
        	'password'=>Hash::make('123456'),
        	'phone'=>'0126789665',
        	'cmnd'=>'113778994',
        	'date'=>'11/07/1998',
        	'address'=>'Hà Nội',
        	'sex'=>'mail',
        	'role'=>'1'	
        ]
        ]);
    }
}
