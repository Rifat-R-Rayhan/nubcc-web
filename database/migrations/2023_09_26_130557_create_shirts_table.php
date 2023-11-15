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
        Schema::create('shirts', function (Blueprint $table) {
            $table->id();
            $table->string('category')->nullable();
            $table->string('buyer_name')->nullable();
            $table->string('semester')->nullable();
            $table->string('nub_id')->nullable();
            $table->string('email')->nullable();
            $table->string('contact')->nullable();
            $table->integer('quantity')->nullable()->default(1);
            $table->string('size')->nullable();
            $table->string('amount')->nullable();
            $table->string('payment_method')->nullable();
            $table->string('payment_num')->nullable();
            $table->string('trans_id')->nullable();
            $table->string('sent_num')->nullable();
            $table->string('address')->nullable();
            $table->tinyInteger('is_active')->default(1);
            $table->timestamp('change_status_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shirts');
    }
};
