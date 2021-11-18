<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\matakuliah;

class matakuliahseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       \Schema::disableForeignKeyConstraints();
        //\DB::table("matakuliah")->truncate();
        \App\Models\matakuliah::insert([
            ["nama_matakuliah" => "mahasiswa"],    
            ["nama_matakuliah" => "halaman"],    
            ["nama_matakuliah" => "nilai"],    
            
        ]);
        \Schema::enableForeignKeyConstraints();
    }
}
    
    
    
 
