<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class mahasiswaseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\mahasiswa::truncate();
        \App\Models\mahasiswa::factory()->count(50)->create();
    }
}
