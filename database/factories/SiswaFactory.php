<?php

namespace Database\Factories;

use App\Models\siswa;
use Illuminate\Database\Eloquent\Factories\Factory;

class SiswaFactory extends Factory
{
    
    @var string
    
    protected $model = siswa::class
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            
            
            "nim" => $this->faker->sentence(10),
            "matakuliah_id" => $this->faker->text(20),
            "nilai" => \App\Models\Kategori::get("id")->random(),
            
        ];
    }
}
