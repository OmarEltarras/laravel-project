<?php

namespace Database\Factories;

use App\Models\Job;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model=Job::class;
    public function definition(): array
    {
        return [
            //
            'title'=>$this->faker->name(),
            'description'=>$this->faker->text(25),
            'requirement'=>$this->faker->text(25),
            'benefits'=>$this->faker->text(25),
            'responsibility'=>$this->faker->text(25),
            'salary'=>$this->faker->text(25),
            'location'=>$this->faker->text(25),
            'worktype'=>$this->faker->text(25),
        ];
    }
}
