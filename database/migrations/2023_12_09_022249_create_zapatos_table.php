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
        Schema::create('zapatos', function (Blueprint $table) {
            $table->id();
            $table->string("marca");
            $table->string("modelo");
            $table->string("tipoZapato");
            $table->string("Talla");
            $table->string("estilo");
            $table->string("color");
            $table->decimal("precio");
            $table->integer("stock");
            $table->string("imagen");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('zapatos');
    }
};
