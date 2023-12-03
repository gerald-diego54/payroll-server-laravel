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
            $table->integer("user_id");
            $table->date('overtime_date');
            $table->integer('overtime_hours');
            $table->boolean('approved');
            $table->boolean('convert_to_offset_credits');
            $table->string('cutoff_remarks');
            $table->string('remarks');
            $table->timestamps();
            $table->softDeletes($column = "deleted_at", $precision = 0);
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
