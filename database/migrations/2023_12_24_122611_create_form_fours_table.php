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
        Schema::create('form_fours', function (Blueprint $table) {
            $table->id();
            $table->string('form')->default('form_four');
            $table->string('year');
            $table->string('div_one');
            $table->string('div_two');
            $table->string('div_three');
            $table->string('div_four');
            $table->string('div_zero');
            $table->text('necta_link');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /** 
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('form_fours');
    }
};
