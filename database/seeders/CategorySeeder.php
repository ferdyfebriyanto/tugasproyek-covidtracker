<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            ['nama_kategori' => 'Teknologi',],
            ['nama_kategori' => 'Kesehatan',],
            ['nama_kategori' => 'Lingkungan',],
            ['nama_kategori' => 'Pendidikan',],
        ];

        DB::table('categories')->insert($categories);
    }
}
