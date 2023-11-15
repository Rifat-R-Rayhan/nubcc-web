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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('email')->nullable();
            $table->string('nub_id')->nullable();
            $table->integer('nubcc_id')->nullable();
            $table->string('semester')->nullable();
            $table->integer('year')->nullable();
            $table->integer('mobile')->nullable();
            $table->string('address')->nullable();
            $table->string('password')->nullable();
            $table->longText('skill')->nullable();
            $table->longText('social_links')->nullable();
            $table->longText('biography')->nullable();
            $table->integer('roll_id');
            $table->integer('date_added')->nullable();
            $table->integer('last_modified')->nullable();
            $table->longText('wishlist')->nullable();
            $table->longText('title')->nullable();
            $table->longText('payment_keys')->nullable();
            $table->longText('verification_code')->nullable();
            $table->integer('status')->nullable();
            $table->integer('is_instructor');
            $table->string('images')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
