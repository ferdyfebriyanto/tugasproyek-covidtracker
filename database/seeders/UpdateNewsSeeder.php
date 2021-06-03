<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UpdateNewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //misal kita update data news yang ada saat ini milik kategori Teknologi
        DB::table('news')->update(['kategori_id' => 1]);
    }
}
