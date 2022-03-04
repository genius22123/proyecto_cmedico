<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tipo_documento;
use App\Models\Tramite;

class Cliente extends Model
{
    use HasFactory;
    /* relacion uno a muchos inversa tipo docuemnto */
    protected $fillable = [
        'nombres',
'apellido_paterno',
'apellido_materno',
'numero_documento',
'tipo_documento_id',
'fecha_nacimiento'
        
    ];
    public function tipo_documento()
    {
        return $this->belongsTo(Tipo_documento::class);
    }
    /* relacion uno a mmuchos - tramite */
    public function tramites()
    {
        return $this->hasMany(Tramite::class);
    }
}
