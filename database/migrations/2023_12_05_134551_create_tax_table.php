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
        Schema::create('tax', function (Blueprint $table) {
            $table->id('tax_id');
            $table->foreign('gross_id')->references('id')->on('gross');
            $table->integer('sss');
            $table->integer('pag_big');
            $table->integer('phil_health');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tax');
    }
};