<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'John Doe',
            'nrp' => '123456',
            'email' => 'admin1@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('11111111'),
            'usertype' => 'admin',
            'current_team_id' => null,
            'profile_photo_path' => null,
            'remember_token' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('users')->insert([
            'name' => 'Jane Smith',
            'nrp' => '654321',
            'email' => 'kasir@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('11111111'),
            'usertype' => 'kasir',
            'current_team_id' => null,
            'profile_photo_path' => null,
            'remember_token' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

    }
}
