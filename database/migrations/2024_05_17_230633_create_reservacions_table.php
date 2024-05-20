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
        Schema::create('reservacions', function (Blueprint $table) {
            $table->string('nro_reservacion', 4)->unique();
            $table->string('nro_promocion', 4);
            $table->string('dni',8);
            $table->decimal('pago_adelantado', 4);
            $table->foreign('nro_promocion')->references('nro_promocion')->on('promocions')->onDelete('cascade');
            $table->foreign('dni')->references('dni')->on('clientes')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservacions');
    }
};
