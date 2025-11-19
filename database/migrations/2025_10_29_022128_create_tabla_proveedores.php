<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('proveedores', function (Blueprint $table) {
            $table->id(); // Clave Primaria: id
            $table->string('nombre_compania', 150)->unique();
            $table->string('persona_contacto', 100)->nullable();
            $table->string('telefono', 20)->nullable();
            $table->string('correo_electronico', 100)->nullable();
            $table->string('direccion')->nullable();
            $table->timestamps();
        });
    }
    // ... método down()
};