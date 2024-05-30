<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Invoice;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->string('reference');
            $table->date('date');
            $table->date('issue_date');
            $table->date('due_date');
            $table->integer('consumption');
            $table->date('nextIndexReading')->nullable();
            $table->date('pleasePayBefore')->nullable();
            $table->decimal('amount', 8, 3);
            $table->enum('payment_status', Invoice::$PAYMENT_STATUSES);
            $table->enum('period', Invoice::$PERIODS);
            $table->foreignId('local_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};