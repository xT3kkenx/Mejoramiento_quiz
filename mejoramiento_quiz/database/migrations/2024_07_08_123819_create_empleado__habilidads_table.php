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
        Schema::create('empleado__habilidads', function (Blueprint $table) {
            $table->id();

            $table->foreign('empleado_id')
            ->references('id')
            ->on('empleados')->onDelete('cascade');

            $table->foreign('habilidad_id')
            ->references('id')
            ->on('habilidas')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empleado__habilidads');
    }
};
