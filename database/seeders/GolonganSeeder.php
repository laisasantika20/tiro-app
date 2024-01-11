<?php

namespace Database\Seeders;

use App\Models\golongan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GolonganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('golongan')->insert([
            ['nama_golongan' => 'Golongan I', 'harga' => 112000],
            ['nama_golongan' => 'Golongan II', 'harga' => 205000],
            ['nama_golongan' => 'Golongan III', 'harga' => 1130000],
            ['nama_golongan' => 'Golongan IV', 'harga' => 2000000],
            ['nama_golongan' => 'Golongan V', 'harga' => 3180000],
            ['nama_golongan' => 'Golongan VI', 'harga' => 4105000],
        ]);
    }
}
