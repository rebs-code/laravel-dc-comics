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
        Schema::create('comics', function (Blueprint $table) {
            $table->id();
            //create columns
            $table->string('title', 100);
            $table->text('description');
            $table->string('thumb', 2048)->nullable();
            $table->float('price', 6, 2);
            $table->string('series', 100);
            $table->date('sale_date');
            $table->string('type', 50);
            $table->string('artists', 1000)->nullable();
            $table->string('writers', 1000)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comics');
    }
};
