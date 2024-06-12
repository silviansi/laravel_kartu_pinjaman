<?php

namespace Database\Seeders;

use App\Models\Pabrikasi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LaporanHarianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $laporan = [
            [
                'user_id' => '2',
                'tebu_giling' => '2432',
                'rendemen_petani' => '4.90',
                'gula_petani' => '119',
                'tetes_petani' => '7.296',
                'tebu_masuk' => '2311'
            ]
            ];

        foreach ($laporan as $laporans) {
            Pabrikasi::create($laporans);
        }
    }
}
