<?php

namespace Database\Factories;

use App\Models\Employer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employer>
 */
class EmployerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model=Employer::class;

    public function definition(): array
    {
        return [
            //
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'password' => bcrypt('password'),
            'age'=>$this->faker->numberBetween(20,50),
            'experience'=>$this->faker->numberBetween(0,10),
            'bio'=>$this->faker->text(50),
            'gender'=>"male",
            'address'=>$this->faker->text(10)
    
        ];
    }
}
