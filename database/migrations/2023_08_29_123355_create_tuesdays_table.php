<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('tuesdays', function (Blueprint $table) {
            $table->id();
            $table->boolean('booked')->default(false);
            $table->string('slot');
            $table->integer('patient_id')->nullable(); 
            $table->unsignedInteger('user_id');     
            $table->unsignedInteger('doctor_id');
            $table->dateTime('created_at');
            $table->dateTime('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tuesday');
    }
};
