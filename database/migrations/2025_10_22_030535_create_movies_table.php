<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->string('imdb_id')->unique();
            $table->string('title')->unique();
            $table->string('year');
            $table->string('rated')->nullable();
            $table->date('release_date')->nullable();
            $table->integer('duration')->nullable(); // menit
            $table->string('genre')->nullable();
            $table->string('director')->nullable();
            $table->string('writer')->nullable();
            $table->string('actors')->nullable();
            $table->text('description')->nullable();
            $table->string('language')->nullable();
            $table->string('country')->nullable();
            $table->string('awards')->nullable();
            $table->text('thumbnail')->nullable();
            $table->decimal('rating', 3, 1)->default(0);
            $table->bigInteger('votes')->default(0);
            $table->string('type')->default('movie');
            $table->string('production')->nullable();
            $table->string('website')->nullable();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movies');
    }
};
