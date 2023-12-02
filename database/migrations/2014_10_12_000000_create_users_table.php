<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments("user_id");
            $table->string('email');
            $table->string('password');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('middle_name');
            $table->string('address');
            $table->string('landline_number');
            $table->string('mobile_number');
            $table->string('company');
            $table->string('branch');
            $table->string('position');
            $table->string('leave_type');
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