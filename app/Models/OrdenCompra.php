<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrdenCompra extends Model
{
    use HasFactory;

    protected $table = 'ordenes_compra';
    
    protected $fillable = [
        'fecha_orden',
        'fecha_recepcion_real',
        'total_factura',
        'estado',
        'proveedor_id', // Clave foránea
    ];

}