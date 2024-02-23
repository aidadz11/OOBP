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
        Schema::create('usluges', function (Blueprint $table) {
            $table->id();
            $table->String('nazivusluge');
            $table->integer('cijenausluge');
            $table->integer('trajanjeusluge');
            $table->String('vrstausluge');
            $table->String('doktor');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usluges');
    }
};
