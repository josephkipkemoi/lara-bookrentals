<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BalanceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'balance' => $this->faker->numberBetween(50,1000),
        ];
    }

}
