<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tramite;
use App\Models\Categoria;

class Clase extends Model
{
    use HasFactory;
    public function tramites()
    {
        return $this->hasMany(Tramite::class);
    }
    public function categorias()
    {
        return $this->hasMany(Categoria::class);
    }
}
