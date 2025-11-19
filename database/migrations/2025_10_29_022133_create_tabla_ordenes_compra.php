<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('ordenes_compra', function (Blueprint $table) {
            $table->id(); // Clave Primaria: id
            $table->dateTime('fecha_orden')->useCurrent();
            $table->dateTime('fecha_recepcion_real')->nullable();
            $table->decimal('total_factura', 10, 2)->default(0.00);
            $table->enum('estado', ['Emitida', 'Recibida', 'Pagada', 'Cancelada'])->default('Emitida');
            
            // Clave Foránea a Proveedores (por defecto: proveedor_id)
            $table->foreignId('proveedor_id')
                  ->constrained('proveedores') // <-- Aquí especificamos el nombre real
                  ->onDelete('restrict');
                  
            $table->timestamps();
        });
    }
    // ... método down()
};