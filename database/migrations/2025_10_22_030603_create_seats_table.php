<?php

use App\Enum\SeatType;
use App\Models\Hall;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('seats', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Hall::class)->constrained()->cascadeOnDelete();
            $table->string('seat_code');
            $table->string('seat_number');
            $table->enum('type', SeatType::cases())->default(SeatType::REGULAR);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seats');
    }
};
