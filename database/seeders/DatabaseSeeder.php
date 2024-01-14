<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(2)->create();

        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'admin1@gmail.com',
            'nrp'   => '1234',
            'usertype' => 'admin',
            'password' => bcrypt('11111111'),
        ]);
        
    }
}
