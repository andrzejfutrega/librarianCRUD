<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'author', 'publication_year', 'genre', 'library_id'];

    /**
     * Relacja N:1 z biblioteką
     */
    public function library()
    {
        return $this->belongsTo(Library::class);
    }

    /**
     * Relacja N:M z czytelnikami przez pośrednią tabelę loans
     */
    public function readers()
    {
        return $this->belongsToMany(Reader::class, 'loans')
                    ->withPivot('loan_date', 'return_date')
                    ->withTimestamps();
    }
}
