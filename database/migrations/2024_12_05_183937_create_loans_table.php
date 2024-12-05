<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoansTable extends Migration
{
    public function up()
    {
        Schema::create('loans', function (Blueprint $table) {
            $table->id(); // PK
            $table->foreignId('book_id')->constrained()->onDelete('cascade'); // FK do tabeli books
            $table->foreignId('reader_id')->constrained()->onDelete('cascade'); // FK do tabeli readers
            $table->date('loan_date'); // Data wypożyczenia
            $table->date('return_date')->nullable(); // Data zwrotu
            $table->timestamps(); // Created_at, Updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('loans');
    }
}
