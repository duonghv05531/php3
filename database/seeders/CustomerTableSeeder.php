<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Seeder;
use Faker\Factory as FakerFactory;

class CustomerTableSeeder extends Seeder
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
                'phone_number' => $faker->phoneNumber,
                'email' => $faker->email,
                'address' => $faker->address
            ];
            Customer::insert($data);
        }
    }
}
