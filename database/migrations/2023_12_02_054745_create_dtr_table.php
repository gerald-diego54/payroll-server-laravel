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
        Schema::create('dtr', function (Blueprint $table) {
            $table->id("dtr_id");
            $table->integer("user_id");
            $table->date("dtr_user_date");
            $table->time("time_in");
            $table->time("time_out");
            $table->string("remarks");
            $table->timestamps();
            $table->softDeletes($column = "deleted_at", $precision = 0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dtr');
    }
};
