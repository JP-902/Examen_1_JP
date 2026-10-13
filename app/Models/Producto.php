<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\belongsTo;

class Producto extends Model
{
    protected $fillable = ['Nombre', 'Descripcion', 'Precio', 'Categoria_id'];

    public function categoria(): belongsTo
    {
        return $this->belongsTo(Categoria::class, 'Categoria_id');
    }
}
