<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $set = new Setting;

        $set->logo = 'Pet Shop';
        $set->hotline = '19001001';
        $set->email = 'vanduonghoang98@gmail.com';
        $set->address = 'Nghĩa Hồng - Nghĩa Hưng - Nam Định';
        $set->save();
    }
}
