<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('salidas_inventario', function (Blueprint $table) {
            $table->id(); // Clave Primaria: id
            $table->dateTime('fecha_hora')->useCurrent();
            $table->enum('tipo_salida', ['Venta', 'Desperdicio', 'Regalo', 'Merma', 'Ajuste Negativo']);
            $table->string('referencia', 50)->nullable(); // Ej: Número de ticket/factura
            $table->text('comentarios')->nullable();
            $table->timestamps();
        });
    }
    // ... método down()
};