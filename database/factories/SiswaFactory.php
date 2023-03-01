<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $kls=array('X','XI','XII');
        shuffle($kls);
        return [
            'nis'=>2020 . $this->faker->randomNumber(2,true) . $this->faker->regexify('[A-Z]{2}') . $this->faker->randomNumber(2,true),
            'nama'=> $this->faker->name(),
            'kelas'=>$kls[0]
        ];
    }
}
