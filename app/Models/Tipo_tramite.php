<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tramite;

class Tipo_tramite extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre'

        
    ];

    public function tramites()
    {
        return $this->hasMany(Tramite::class);
    }
    
}
