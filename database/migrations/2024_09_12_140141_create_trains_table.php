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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('Company', 150);
            $table->string('From', 150);
            $table->string('To', 150);
            $table->time('Departure_time');
            $table->time('Arrive_time');
            $table->string('Train_code', 12);
            $table->tinyInteger('Vagons');
            $table->boolean('In_time')->default('1');
            $table->boolean('Cancelled')->default('1');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
