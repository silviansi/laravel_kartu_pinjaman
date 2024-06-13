<?php

namespace Database\Seeders;

use App\Models\LogsPinjaman;
use App\Models\Pinjaman;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PinjamanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pinjamans = [
            [
                'user_id' => '2',
                'tanggal' => '2023-12-28',
                'no_bukti' => 'KSB231228280',
                'jumlah_pinjaman' => '71986854',
                'no_rek' => '395720485693',
                'total' => '71986854',
                'uraian' => 'garapan 2023-12'
            ]
        ];

        foreach ($pinjamans as $pinjaman) {
            LogsPinjaman::create($pinjaman);
        }
    }
}
