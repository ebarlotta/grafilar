<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sistema_impresion extends Model
{
    /** @use HasFactory<\Database\Factories\SistemaImpresionFactory> */
    use HasFactory;

    protected $fillable=[
        'sistema',
        'factor',
        'activo',
        'eliminado',
    ];
}
