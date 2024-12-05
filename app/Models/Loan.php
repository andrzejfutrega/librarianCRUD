<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    use HasFactory;

    protected $fillable = ['book_id', 'reader_id', 'loan_date', 'return_date'];

    /**
     * Relacja N:1 z książką
     */
    public function book()
    {
        return $this->belongsTo(Book::class);
    }

    /**
     * Relacja N:1 z czytelnikiem
     */
    public function reader()
    {
        return $this->belongsTo(Reader::class);
    }
}
