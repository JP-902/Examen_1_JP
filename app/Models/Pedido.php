<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\belongsTo;

class Pedido extends Model
{
    protected $fillable = ['Cliente_id', 'Empleado_id', 'Fecha', 'Total','Producto_id'];

    public function cliente(): belongsTo
    {
        return $this->belongsTo(Cliente::class, 'Cliente_id');
    }

    public function empleado(): belongsTo
    {
        return $this->belongsTo(Empleado::class, 'Empleado_id');
    }

    public function productos(): belongsTo
    {
        return $this->belongsTo(Producto::class, 'Producto_id');
    }


}
