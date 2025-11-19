<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id(); // Clave Primaria: id
            $table->string('nombre', 150);
            $table->text('descripcion')->nullable();
            $table->decimal('precio_venta', 8, 2);
            $table->unsignedInteger('stock_actual')->default(0);
            $table->unsignedInteger('stock_minimo')->default(5);
            $table->string('unidad_medida', 20)->default('unidad');
            
            // Clave Foránea a Categorias (por defecto: categoria_id)
            $table->foreignId('categoria_id')->constrained()->onDelete('restrict');
            
            $table->timestamps();
        });
    }
    // ... método down()
};