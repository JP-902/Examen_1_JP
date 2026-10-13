<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\hasMany;

class Cliente extends Model
{
    protected $fillable = ['Nombre', 'Email', 'Telefono', 'Direccion'];

    public function pedidos(): hasMany
    {
        return $this->hasMany(Pedido::class, 'Cliente_id');
    }
}
