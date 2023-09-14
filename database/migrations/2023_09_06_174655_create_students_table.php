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
        Schema::create('students', function (Blueprint $table) {
            // $table->engine('InnoDB');
            $table->id();
            $table->string('name', 150);
            $table->string('phone', 20);
            $table->string('email', 50)->nullable();
            $table->string('address')->length(255);
            $table->unsignedBigInteger('city_id')->index();
            $table->timestamps();

            $table->foreign('city_id')->references('id')->on('cities')->onUpdate('CASCADE')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
