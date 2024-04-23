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
        Schema::create('inputusers', function (Blueprint $table) {
            $table->id();
            $table->string('user_name')->nullable();
            $table->string('age_user')->nullable();
            $table->string('address_user')->nullable();
            $table->string('phone_user')->nullable();
            $table->timestamps();

            $table->foreignID('role_id')->constrained()->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inputusers');
    }
};