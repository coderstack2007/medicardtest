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
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->string('username'); 
            $table->string('phone')->nullable();
            $table->text('lastname')->nullable();
            $table->text('date')->nullable();
            $table->text('gender')->nullable();
            $table->text('department')->nullable();
            $table->text('university')->nullable();
            $table->text('specialist')->nullable();
            $table->text('nationalid')->nullable();
            $table->text('designation')->nullable(); 
            $table->integer('user_id')->constrained()->onDelete('cascade')->nullable(); 

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctors');
    }
};
