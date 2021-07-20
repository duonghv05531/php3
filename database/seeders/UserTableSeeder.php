<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Faker\Factory as FakerFactory;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = FakerFactory::create();
        for ($i = 0; $i < 10; $i++) {
            $data = [
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => '$2y$10$oVJ04r5sapureN09Ql77oOxNNvSicJBKLvSakdk/isOqqB8YNKLl2',
                'address' => $faker->address,
                'gender' => rand(1, 2),
                'role' => rand(1, 3)
            ];
            User::insert($data);
        }
    }
}
