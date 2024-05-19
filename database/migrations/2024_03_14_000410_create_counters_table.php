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
    Schema::create('counters', function (Blueprint $table) {
        $table->id();
        $table->enum('type', ['gas', 'water', 'electricity']);
        $table->string('serial_number');
        $table->unsignedBigInteger('local_id');
        $table->decimal('avg_consommation', 8, 2);
        $table->timestamps();
//TODO add addresse
        $table->foreign('local_id')->references('id')->on('locals')->onDelete('cascade');
    });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('counters');
    }
};
