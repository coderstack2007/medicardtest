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
        Schema::create('resepts', function (Blueprint $table) {
            $table->id();
            $table->text('category');
            $table->text('medicine');
            $table->text('des');
            $table->text('dosage');
            $table->text('prescribed');
            $table->integer('user_id')->constrained()->onDelete('cascade');;
            $table->integer('patient_id')->constrained()->onDelete('cascade');;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resepts');
    }
};
