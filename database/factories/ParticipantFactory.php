<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ParticipantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama' => $this->faker->name(),
            'tgl_lahir' => $this->faker->date(),
            'alamat' => $this->faker->word(),
            'no_telp' => $this->faker->randomNumber(5,true),
            'minat_bakat' => $this->faker->word(),
            'fakultas' => $this->faker->word()
        ];
    }
}