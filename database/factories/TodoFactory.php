<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TodoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
        public function definition(): array
        {
            return [
                'task' => $this->faker->words(random_int(5, 10), true),
                'is_done' => $this->faker->boolean(25),
            ];
        }
}
