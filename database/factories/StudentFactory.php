<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Classes;
use App\Models\Section;

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
            'name'=> $this->faker-> name(),
            'email'=> $this->faker->unique()->safeEmail,
            // 'class_id'=> \App\Models\Classes::factory(),
            // 'section_id'=> \App\Models\Section::factory(),
        ];
    }
}
