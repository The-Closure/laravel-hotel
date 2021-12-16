<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RoomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'number' => $this->faker->randomDigit(),
            'beds' => $this->faker->randomDigit(),
            'price' => $this->faker->randomDigit(),
            'story' => $this->faker->randomDigit(),
            'description->en' => $this->faker->sentence(),
            'description->ar' => $this->faker->sentence(),
            'status->en' => $this->faker->word(),
            'status->ar' => $this->faker->word(),
            'created_at' => $this->faker->dateTimeThisMonth(),
        ];
    }
}
