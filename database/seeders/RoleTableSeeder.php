<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;
use Faker\Factory as FakerFactory;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = FakerFactory::create();
        for ($i = 1; $i < 4; $i++) {
            $data = [
                'name' => $faker->name
            ];
            Role::insert($data);
        }
    }
}
