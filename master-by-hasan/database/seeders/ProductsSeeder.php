<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Tests\Database\Fixtures\Models\Money\Price;



class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        // Insert new data
        DB::table('products')->insert([
            [
                'name' => 'Pocket Watch',
                'description' => 'A pocket watch typically has a circular or sometimes rectangular-shaped case made of various materials such as stainless steel, gold, silver, or even brass. The case often features intricate engravings, decorative patterns, or a smooth, polished finish, making it a stylish accessory.',
                'price' => '15',
                'quantity' => '1',
                'image' => '../img/1-1.jpg',

                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Flower Vase',
                'description' => 'A flower vase is an elegant and decorative container used to display fresh or artificial flowers. It comes in various shapes, sizes, and materials, adding beauty and charm to any room or event.',
                'price' => '50',
                'quantity' => '1',
                'image' => '../img/1-2.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'vase ',
                'description' => 'A flower vase is an elegant and decorative container used to display fresh or artificial flowers. It comes in various shapes, sizes, and materials, adding beauty and charm to any room or event.',
                'price' => '80',
                'quantity' => '1',
                'image' => '../img/1-3.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'Land Line',
                'description' => 'A flower vase is an elegant and decorative container used to display fresh or artificial flowers. It comes in various shapes, sizes, and materials, adding beauty and charm to any room or event.',
                'price' => '25',
                'quantity' => '1',
                'image' => '../img/1-4.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);
    }

}
