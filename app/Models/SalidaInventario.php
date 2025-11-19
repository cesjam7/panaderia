<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalidaInventario extends Model
{
    use HasFactory;

    protected $table = 'salidas_inventario';

    protected $fillable = [
        'fecha_hora',
        'tipo_salida',
        'referencia',
        'comentarios',
    ];

}