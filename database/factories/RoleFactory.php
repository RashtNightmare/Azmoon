<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RoleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = \App\Models\Role::class;

    public function definition()
    {
           return [
             'name' => $this->faker->name,
             'created_at' => now(),
             'updated_at' => now(),
              ];
        
    }
}
