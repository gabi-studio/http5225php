<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // factories are used to create fake data
            // this is great for testing
            // theres a github repo that shows you all the available faker methods
            // DO THIS FOR THE ASSIGNMENT to get the highest park
            'fname' => fake()->firstName(),
            'lname' => fake()->lastName(),
            'email' => fake()->unique()->safeEmail()

            // at this point, you havent created the students table yet
            // you have built something like a blueprint/model
            // similar to models in the MVC pattern
        ];
    }
}
