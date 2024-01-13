<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kapal;

class KapalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kapal::create([
            'nm_kapal' => 'Black Pearl',
            'kapasitas' => 500,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Kapal::create([
            'nm_kapal' => 'Thunderstrike',
            'kapasitas' => 300,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Kapal::create([
            'nm_kapal' => 'Eclipse Voyager',
            'kapasitas' => 700,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
