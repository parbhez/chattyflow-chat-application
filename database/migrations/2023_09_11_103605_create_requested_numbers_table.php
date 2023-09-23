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
    
        Schema::create('requested_numbers', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('name')->nullable();
            $table->string('email')->nullable();
            $table->string('customer_phone')->nullable();
            $table->string('phone_number');
            $table->string('area_code');
            $table->string('plan')->nullable();
            $table->string('address')->nullable();
            $table->date('status')->nullable();;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('requested_numbers');
    }
};
