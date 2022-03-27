<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Settings;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Models\User::create([
            'name' => 'Shuhrat Xodjakov',
            'email' => 'shuhrat92hod@gmail.com',
            'password' => bcrypt('123456789'),
            'description' => 'This is my profile.',
        ]);

        

        // DB::table('users')->insert([
        //     'name' => 'Shuhrat Xodjakov',
        //     'email' => 'shuhrat92hod@gmail.com',
        //     'password' => bcrypt('123456789'),
        //     //'description' => 'This is my profile.',
        // ]);
    }
}
