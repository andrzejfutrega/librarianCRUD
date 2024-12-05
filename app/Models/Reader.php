<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reader extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'membership_date'];

    /**
     * Relacja N:M z książkami przez pośrednią tabelę loans
     */
    public function books()
    {
        return $this->belongsToMany(Book::class, 'loans')
                    ->withPivot('loan_date', 'return_date')
                    ->withTimestamps();
    }
}
