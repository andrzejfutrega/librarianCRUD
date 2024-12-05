<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReadersTable extends Migration
{
    public function up()
    {
        Schema::create('readers', function (Blueprint $table) {
            $table->id(); // PK
            $table->string('name'); // Imię i nazwisko
            $table->string('email')->unique(); // Unikalny email
            $table->date('membership_date'); // Data członkostwa
            $table->timestamps(); // Created_at, Updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('readers');
    }
}
