<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class nilaifactoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
          
           
            "nim" => $this->faker->text(10),
            "matakuliah_id" => \App\Models\matakuliah::get("id"),
            "nilai" => \App\Models\matakuliah::get("id"),
        ];
    
    }
}
