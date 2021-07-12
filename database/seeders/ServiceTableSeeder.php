<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $service = new Service;
        $service = [
            ['name' => 'DỊCH VỤ GIỮ NỘI TRÚ', 'desc' => 'Kasd dolor no lorem sit tempor at justo rebum rebum stet justo elitr dolor amet sit', 'price' => '100000', 'image' => 'house'],
            ['name' => 'CHO THÚ CƯNG ĂN', 'desc' => 'Kasd dolor no lorem sit tempor at justo rebum rebum stet justo elitr dolor amet sit', 'price' => '100000', 'image' => 'food'],
            ['name' => 'CHẢI LÔNG', 'desc' => 'Kasd dolor no lorem sit tempor at justo rebum rebum stet justo elitr dolor amet sit', 'price' => '100000', 'image' => 'grooming'],
            ['name' => 'HUẤN LUYỆN THÚ CƯNG', 'desc' => 'Kasd dolor no lorem sit tempor at justo rebum rebum stet justo elitr dolor amet sit', 'price' => '100000', 'image' => 'cat'],
            ['name' => 'RÈN LUYỆN SỨC KHỎE', 'desc' => 'Kasd dolor no lorem sit tempor at justo rebum rebum stet justo elitr dolor amet sit', 'price' => '100000', 'image' => 'dog'],
            ['name' => 'KHÁM SỨC KHỎE', 'desc' => 'Kasd dolor no lorem sit tempor at justo rebum rebum stet justo elitr dolor amet sit', 'price' => '100000', 'image' => 'vaccine'],
        ];
        Service::insert($service);
    }
}
