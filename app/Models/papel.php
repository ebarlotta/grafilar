<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class papel extends Model
{
    /** @use HasFactory<\Database\Factories\PapelFactory> */
    use HasFactory;

    protected $fillable=[
        'gramaje',
        'tamano_papel',
        'precio',
        'activo',
        'eliminado',
    ];
}
