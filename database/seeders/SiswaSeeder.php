<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SiswaSeeder extends Seeder
{
    
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        \App\Models\Beranda::truncate();
        \App\Models\Beranda::factory()->count(10)->create();
    }
}
