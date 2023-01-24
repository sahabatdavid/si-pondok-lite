<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Asrama;

class AsramaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Asrama::create([
            'nama'  => 'Abu Bakar'
        ]);

        Asrama::create([
            'nama'  => 'Umar bin Khatab'
        ]);

        Asrama::create([
            'nama'  => 'Utsman bin Affan'
        ]);

        Asrama::create([
            'nama'  => 'Ali bin Abi Thalib'
        ]);
    }
}
