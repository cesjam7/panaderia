<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('detalle_salida', function (Blueprint $table) {
            $table->id(); // Clave Primaria: id
            
            // Claves Foráneas: salida_inventario_id y producto_id
            $table->foreignId('salida_inventario_id')->constrained('salidas_inventario')->onDelete('cascade');
            $table->foreignId('producto_id')->constrained()->onDelete('restrict');
            
            $table->unsignedInteger('cantidad');
            
            // Asegura que no haya duplicados de producto en la misma salida
            $table->unique(['salida_inventario_id', 'producto_id']);
            
            $table->timestamps();
        });
    }
    // ... método down()
};