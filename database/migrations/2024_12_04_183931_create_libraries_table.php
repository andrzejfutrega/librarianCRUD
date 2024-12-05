<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLibrariesTable extends Migration
{
    public function up()
    {
        Schema::create('libraries', function (Blueprint $table) {
            $table->id(); // PK
            $table->string('name'); // Nazwa biblioteki
            $table->string('location'); // Lokalizacja
            $table->year('established_year'); // Rok założenia
            $table->timestamps(); // Created_at, Updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('libraries');
    }
}
