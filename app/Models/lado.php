<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lado extends Model
{
    /** @use HasFactory<\Database\Factories\LadoFactory> */
    use HasFactory;

    protected $fillable=[
        'lados',
        'factor',
        'activo',
        'eliminado',
    ];
}
