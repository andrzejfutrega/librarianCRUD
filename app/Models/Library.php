<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Library extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'location', 'established_year'];

    /**
     * Relacja 1:N z książkami
     */
    public function books()
    {
        return $this->hasMany(Book::class);
    }
}
