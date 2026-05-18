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
    Schema::create('schedules', function (Blueprint $table) {
        $table->id();
        $table->foreignId('origin_island_id')->constrained('islands')->onDelete('cascade');
        $table->foreignId('destination_island_id')->constrained('islands')->onDelete('cascade');
        $table->string('ship_name'); // Nama kapal / pompong
        $table->string('ship_type'); // Roro, Speedboat, Pompong
        $table->time('departure_time'); // Jam keberangkatan
        $table->decimal('price', 10, 2); // Harga tiket
        $table->enum('status', ['Aman', 'Tunda', 'Batal'])->default('Aman'); // Kondisi cuaca/keberangkatan
        $table->text('notes')->nullable(); // Catatan tambahan
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schedules');
    }
};
