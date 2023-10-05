<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->truncate();

        // Insert new data
        DB::table('categories')->insert([
            [
                'name' => 'Antique',
                'image' => '../img/1-1.jpg',

            ],
            [
                'name' => 'miscellaneus',
                'image' => '../img/4-1.jpg',

            ],
            [
                'name' => 'Housware',
                'image' => '../img/2-1.jpg',

            ] ,
            [
                'name' => 'Electrical appliances',
                'image' => '../img/3-1.jpg',

            ]
        ]);

    }


}
