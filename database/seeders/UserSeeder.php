<?php

namespace Database\Seeders;

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
            'username' => 'admin',
            'name'=>'Administrator',
            'email'=>'admin@gmail.com',
            'admin' => 'y',
            'birth' => '2001-05-02',
            'phone' => '085956468359',
            'address' => 'Malang',
            'gender' => 'Laki-laki',
            'password'=>Hash::make('12345678'),
        ]);
    }
}
