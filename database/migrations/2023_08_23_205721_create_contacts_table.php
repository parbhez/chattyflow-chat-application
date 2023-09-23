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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('number')->nullable();
            $table->string('action')->nullable();
            $table->string('chatting_with')->nullable();
            $table->string('ip')->nullable();
            $table->string('country')->nullable();
            $table->string('states')->nullable();
            $table->string('city')->nullable();
            $table->string('came_from')->nullable();
            $table->string('operating_system')->nullable();
            $table->string('browser')->nullable();
            $table->string('last_seen')->nullable();
            $table->string('sent_greetings')->nullable();
            $table->string('accepted_greetings')->nullable();
            $table->string('ignored_greetings')->nullable();
            $table->string('group')->nullable();
            $table->string('last_greetings')->nullable();
            $table->string('customer_id')->nullable();
            $table->string('user_contact_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
