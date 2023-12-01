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
        Schema::create('leave', function (Blueprint $table) {
            $table->id('leave_id');
            $table->integer('user_id');
            $table->date('date');
            $table->string('cutoff_remarks');
            $table->string('leave_type');
            $table->boolean('half_day');
            $table->boolean('with_pay');
            $table->boolean('approve');
            $table->string('remarks');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leave');
    }
};
