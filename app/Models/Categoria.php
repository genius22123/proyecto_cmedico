<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tramite;
use App\Models\Clase;

class Categoria extends Model
{
    use HasFactory;
    public function tramites()
    {
        return $this->hasMany(Tramite::class);
    }
    public function clase()
    {
        return $this->belongsTo(Clase::class);
    }
}
