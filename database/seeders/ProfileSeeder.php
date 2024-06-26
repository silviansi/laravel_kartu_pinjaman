<?php

namespace Database\Seeders;

use App\Models\Profile;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $profiles = [
            [
                'kebun' => 'Jiken',
                'no_vak' => '24-5624',
                'no_kontrak' => '174.34528',
                'kategori' => 'TRS KSU II A',
                'luas_kebun' => '7',
                'kecamatan' => 'Tulangan',
                'kota' => 'Sidoarjo',
                'user_id' => '2'
            ],
            [
                'kebun' => 'Baranang',
                'no_vak' => '24-6354',
                'no_kontrak' => '174.23453',
                'kategori' => 'TRS KSU I A',
                'luas_kebun' => '5',
                'kecamatan' => 'Sukorejo',
                'kota' => 'Pasuruan',
                'user_id' => '3'
            ]
        ];

        foreach ($profiles as $profile) {
            Profile::create($profile);
        }
    }
}
