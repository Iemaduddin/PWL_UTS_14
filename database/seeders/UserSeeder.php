<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username' => 'admin_didin',
            'name' => 'Admin Didin',
            'email' => 'didin.admin@gmail.com',
            'nohp' => '082331311947',
            'password' => Hash::make('password')
        ]);
    }
}
