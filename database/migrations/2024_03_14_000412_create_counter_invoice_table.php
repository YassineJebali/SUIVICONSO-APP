<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Counter;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('counter_invoice', function (Blueprint $table) {
            $table->id();
            $table->foreignId('counter_id')->constrained();
            $table->foreignId('invoice_id')->constrained();
            $table->date('reading_date');
            $table->enum('billing_method', Counter::$billingmethods);
            $table->text('notes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('counter_invoice');
    }
};
