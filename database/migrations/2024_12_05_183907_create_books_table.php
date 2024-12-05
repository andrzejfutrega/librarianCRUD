<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id(); // PK
            $table->string('title'); // Tytuł książki
            $table->string('author'); // Autor książki
            $table->year('publication_year'); // Rok wydania
            $table->string('genre'); // Gatunek
            $table->foreignId('library_id')->constrained()->onDelete('cascade'); // FK do tabeli libraries
            $table->timestamps(); // Created_at, Updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('books');
    }
}
