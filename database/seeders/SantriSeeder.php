<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Santri;

class SantriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Santri::create([
            'user_id'   => 2,
            'asrama_id' => 2,
            'nisn'      => '43282122',
            'nik'       => '11001101',
            'ttl'       => 'Indonesia, 25 Januari 2001',
            'alamat'    => 'Indonesia',
        ]);

        Santri::create([
            'user_id'   => 3,
            'asrama_id' => 3,
            'nisn'      => '43282121',
            'nik'       => '11001102',
            'ttl'       => 'Indonesia, 25 Januari 2003',
            'alamat'    => 'Indonesia',
        ]);

        Santri::create([
            'user_id'   => 1,
            'asrama_id' => 1,
            'nisn'      => '43282123',
            'nik'       => '11001103',
            'ttl'       => 'Indonesia, 25 Januari 2022',
            'alamat'    => 'Indonesia',
        ]);
    }
}
