<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('movimientos_inventario', function (Blueprint $table) {
            $table->id(); // Clave Primaria: id
            $table->dateTime('fecha_hora')->useCurrent();
            $table->enum('tipo_movimiento', ['Ajuste Positivo', 'Ajuste Negativo', 'Traslado Entrada', 'Traslado Salida']);
            
            // La cantidad de cambio. Positivo para aumentos, negativo para disminuciones.
            $table->integer('cantidad'); 
            
            $table->text('razon'); // Por qué se hizo el movimiento
            
            // Clave Foránea a Productos (por defecto: producto_id)
            $table->foreignId('producto_id')->constrained()->onDelete('restrict');
            
            $table->timestamps();
        });
    }
    // ... método down()
};