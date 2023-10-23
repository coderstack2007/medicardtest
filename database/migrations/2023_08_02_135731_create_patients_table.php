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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('username');  
            $table->string('phone')->nullable();
            $table->text('address')->nullable();
            $table->text('date')->nullable();
            $table->text('height')->nullable();
            $table->text('weight')->nullable();
            $table->text('Gender')->nullable();
            $table->text('factor')->nullable();
            $table->text('nationality')->nullable();
            $table->text('blood')->nullable();
            $table->text('user_id')->constrained()->onDelete('cascade')->nullable(); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
