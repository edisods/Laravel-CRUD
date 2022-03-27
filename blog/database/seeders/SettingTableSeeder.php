<?php

namespace Database\Seeders;

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
        App\Models\Setting::create([
            'name' => 'Shuhrat.uz',
            'copyright' => 'Copyright © 2022 All rights reserved',
        ]);
    }
}
