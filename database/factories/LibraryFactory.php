<?php

namespace Database\Factories;

use App\Models\Library;
use Illuminate\Database\Eloquent\Factories\Factory;

class LibraryFactory extends Factory
{
    protected $model = Library::class;

    public function definition()
    {
        return [
            'name' => $this->faker->company,
            'location' => $this->faker->address,
            'established_year' => $this->faker->year,
        ];
    }
}

