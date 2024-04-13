<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('books', function (Blueprint $table) {
            $table->bigIncrements("bookid", 11);
            $table->integer("authorid", 11)->default(0);;
            $table->string("title", 25);
            $table->string("ISBN", 25);
            $table->smallInteger("pub_year", 6)->default(0);;
            $table->tinyInteger("available", 4);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
