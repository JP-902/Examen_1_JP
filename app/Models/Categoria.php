<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\hasMany;

class Categoria extends Model
{
    protected $fillable = ['Tipo'];
    

    public function productos(): hasMany
    {
        return $this->hasMany(Producto::class, 'Categoria_id');
    }
}
