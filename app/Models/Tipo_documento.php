<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cliente;

class Tipo_documento extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre'

        
    ];
    /* relacion uno a mmuchos - cliente */
    public function clientes()
    {
        return $this->hasMany(Cliente::class);
    }
}
