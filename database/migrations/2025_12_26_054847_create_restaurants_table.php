<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('restaurants', function (Blueprint $table) {
            $table->id();
            $table->string('rest_name');
            $table->text('rest_description')->nullable();

            $table->foreignId('user_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->timestamps();
        });

        DB::statement("
            ALTER TABLE restaurants
            ADD rest_logo LONGBLOB NULL
        ");
    }

    public function down(): void
    {
        Schema::dropIfExists('restaurants');
    }
};
