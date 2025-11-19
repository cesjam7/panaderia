<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('detalle_orden_compra', function (Blueprint $table) {
            $table->id(); // Clave Primaria: id
            
            // Claves Foráneas: orden_compra_id y producto_id
            $table->foreignId('orden_compra_id')->constrained('ordenes_compra')->onDelete('cascade');
            $table->foreignId('producto_id')->constrained()->onDelete('restrict');
            
            $table->unsignedInteger('cantidad_comprada');
            $table->decimal('costo_unitario', 8, 2);
            $table->unsignedInteger('cantidad_recibida')->default(0);
            
            // Asegura que no haya duplicados de producto en la misma orden
            $table->unique(['orden_compra_id', 'producto_id']);
            
            $table->timestamps();
        });
    }
    // ... método down()
};