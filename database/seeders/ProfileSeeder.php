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
                'luas_kebun' => '7.25',
                'kecamatan' => 'Tulangan',
                'kota' => 'Sidoarjo',
                'user_id' => '2'
            ]
        ];

        foreach ($profiles as $profile) {
            Profile::create($profile);
        }
    }
}
