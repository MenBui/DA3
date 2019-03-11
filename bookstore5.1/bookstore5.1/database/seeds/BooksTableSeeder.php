<?php

use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('Books')->insert([
            ['name'=>'Búp sen xanh',
            'price'=>35000,
            ],
            ['name'=>'Búp sen xanh',
            'price'=>40000,
            ]

        ]);
    }
}
