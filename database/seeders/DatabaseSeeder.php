<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Library;
use App\Models\Book;
use App\Models\Reader;
use App\Models\Loan;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
         // Tworzenie bibliotek
         $libraries = Library::factory(1000)->create(); // Tworzy 5 bibliotek

         // Tworzenie książek, każda książka jest przypisana do jednej z bibliotek
         Book::factory(1000)->create();
 
         // Tworzenie czytelników
         Reader::factory(1000)->create();
 
         // Tworzenie wypożyczeń
         Loan::factory(1000)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
