<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MovimientoInventario extends Model
{
    use HasFactory;

    protected $table = 'movimientos_inventario';

    protected $fillable = [
        'fecha_hora',
        'tipo_movimiento',
        'cantidad',
        'razon',
        'producto_id', // Clave foránea
    ];

}