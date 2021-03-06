<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Faker\Factory as FakerFactory;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = FakerFactory::create();
        for ($i = 0; $i < 100; $i++) {
            $data = [
                'name' => $faker->name,
                'cate_id' => 2,
                'image' => $faker->imageUrl($width = 100, $height = 100, 'cats'),
                'price' => 100.000,
                'quantity' => 100,
                'sort_desc' => $faker->name,
                'detail' => 'awdhaw auwidha wawdhga8 wawudhga wa9uwdh awudh ',
                'view' => 100,
                'star' => 5,
                'created_by' => 'admin'
            ];
            Product::insert($data);
        }
    }
}
