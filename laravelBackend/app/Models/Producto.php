<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    //
    protected $table = 'productos';
    protected $fillable = [
        'nombre',
        'precio',
        'id_marca'
    ];
    public function marca()
    {
        return $this->belongsTo(Marca::class, 'id_marca');
    }
}
