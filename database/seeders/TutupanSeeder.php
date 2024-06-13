<?php

namespace Database\Seeders;

use App\Models\Tutupan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TutupanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tutupan = [
            [
                'user_id' => '2',
                'tanggal' => '2023-12-28',
                'no_bukti' => 'TTP231230174',
                'jumlah_tutupan' => '65987890',
                'total' => '65987890',
                'uraian' => 'TUTUPAN 2023-12'
            ]
            ];

        foreach ($tutupan as $tutupans) { 
            Tutupan::create($tutupans);
        }
    }
}
