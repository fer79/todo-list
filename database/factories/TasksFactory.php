<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TasksFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'task_name' => $this->faker->realText(20),
            'due_date' => $this->faker->optional(0.8)->dateTimeThisMonth(), // optional has value 80% of the time
            'end_date' => $this->faker->optional(0.4)->dateTime($max = 'now'),
        ];
    }
}
