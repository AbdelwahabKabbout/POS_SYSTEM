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
        Schema::create('dine_ins', function (Blueprint $table) {
            $table->id();
            $table->integer('table_number');
            $table->integer('table_customer_number')->nullable();
            $table->text('table_customer_feedback')->nullable();

            $table->enum('table_customer_status', [
                'AVAILABLE',
                'RESERVED',
                'NOT_AVAILABLE',
                'OUT_OF_SERVICE'
            ])->default('AVAILABLE');

            $table->foreignId('branch_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dine_ins');
    }
};
