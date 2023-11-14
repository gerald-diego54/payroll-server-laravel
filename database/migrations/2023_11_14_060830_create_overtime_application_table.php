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
        
        Schema::create('overtime_application', function (Blueprint $table) {
            $table->id('overtime_id');
            $table->integer('overtime_application_number');
            $table->date('overtime_date');
            $table->integer('overtime_hours');
            $table->boolean('approved');
            $table->boolean('convert_to_offset_credits');
            $table->string('cutoff_remarks');
            $table->string('remarks');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('overtime_application');
    }
};
