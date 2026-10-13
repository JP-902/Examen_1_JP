<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\hasMany;
use Illuminate\Database\Eloquent\Relations\belongsTo;

class Proveedor extends Model
{
    protected $fillable = ['Nombre', 'Email', 'Telefono', 'Direccion'];

    public function material_proveedores(): belongsTo
    {
        return $this->belongsTo(Material_Proveedor::class, 'Material_Proveedor_id');
    }

    public function pedidos(): hasMany
    {
        return $this->hasMany(Pedido::class, 'Proveedor_id');
    }
}
