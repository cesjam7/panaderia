<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleOrdenCompra extends Model
{
    use HasFactory;

    protected $table = 'detalle_orden_compra';

    protected $fillable = [
        'orden_compra_id', // Clave foránea
        'producto_id',     // Clave foránea
        'cantidad_comprada',
        'costo_unitario',
        'cantidad_recibida',
    ];
}