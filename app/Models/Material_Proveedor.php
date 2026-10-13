<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\hasMany;

class Material_Proveedor extends Model
{
    protected $fillable = ['Tipo_Material'];

    public function proveedores(): hasMany
    {
        return $this->hasMany(Proveedor::class, 'Material_Proveedor_id');
    }
}
