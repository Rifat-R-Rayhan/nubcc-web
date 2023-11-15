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
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('member_name')->nullable();
            $table->string('designation')->nullable();
            $table->string('email')->nullable();
            $table->string('password')->nullable();
            $table->integer('mobile')->nullable();
            $table->string('fb_link')->nullable();
            $table->bigInteger('student_id')->nullable();
            $table->string('program')->nullable();
            $table->string('semester')->nullable();
            $table->string('image')->nullable();
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
        Schema::dropIfExists('members');
    }
};
