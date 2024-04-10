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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('azienda');
            $table->string('s_partenza');
            $table->string('s_arrivo');
            $table->time('orario_partenza', $precision = 0);
            $table->time('orario_arrivo', $precision = 0);
            $table->string('codice_treno', 10);
            $table->integer('n_carrozze');
            $table->boolean('in_orario')->nullable();
            $table->boolean('cancellato');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
