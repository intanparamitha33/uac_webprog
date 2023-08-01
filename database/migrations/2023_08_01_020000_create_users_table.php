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
            $table->string('name');
            $table->string('email')->unique();
            $table->string('gender');
            $table->string('linkedin_username');
            $table->string('mobile_number');
            $table->unsignedBigInteger('job_id');
            $table->foreign('job_id')->references('id')->on('jobs')->cascadeOnDelete()->cascadeOnUpdate();
            $table->unsignedBigInteger('state_id');
            $table->foreign('state_id')->references('id')->on('states')->cascadeOnDelete()->cascadeOnUpdate();
            $table->decimal('coin')->default(0);
            $table->timestamp('email_verified_at')->nullable();
            $table->integer('admin');
            $table->string('password');
            $table->bigInteger('registration_price')->default(100000);
            $table->rememberToken();
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
