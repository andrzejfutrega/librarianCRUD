<?php

namespace Database\Factories;

use App\Models\Book;
use App\Models\Library;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    protected $model = Book::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'author' => $this->faker->name,
            'publication_year' => $this->faker->year,
            'genre' => $this->faker->word,
            'library_id' => Library::factory(),  // Tworzy bibliotekę, jeśli nie ma jeszcze
        ];
    }
}
