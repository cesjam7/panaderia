<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleSalida extends Model
{
    use HasFactory;

    protected $table = 'detalle_salida';

    protected $fillable = [
        'salida_inventario_id', // Clave foránea
        'producto_id',          // Clave foránea
        'cantidad',
    ];

}