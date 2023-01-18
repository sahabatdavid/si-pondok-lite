<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'      => 'Admin',
            'email'     => 'admin@gmail.com',
            'password'  => bcrypt('12345678')
        ]);

        User::create([
            'name'      => 'Staff IT',
            'email'     => 'staff@gmail.com',
            'password'  => bcrypt('12345678')
        ]);

        User::create([
            'name'      => 'Bendahara',
            'email'     => 'bendara@gmail.com',
            'password'  => bcrypt('12345678')
        ]);
    }
}
