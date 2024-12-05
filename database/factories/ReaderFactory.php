<?php

namespace Database\Factories;

use App\Models\Reader;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReaderFactory extends Factory
{
    protected $model = Reader::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'membership_date' => $this->faker->date,
        ];
    }
}
