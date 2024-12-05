<?php

namespace Database\Factories;

use App\Models\Loan;
use App\Models\Book;
use App\Models\Reader;
use Illuminate\Database\Eloquent\Factories\Factory;

class LoanFactory extends Factory
{
    protected $model = Loan::class;

    public function definition()
    {
        return [
            'book_id' => Book::factory(),
            'reader_id' => Reader::factory(),
            'loan_date' => $this->faker->date,
            'return_date' => $this->faker->date,
        ];
    }
}
