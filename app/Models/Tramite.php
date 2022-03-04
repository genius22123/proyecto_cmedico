<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cliente;
use App\Models\Tipo_tramite;
use App\Models\Clase;
use App\Models\Categoria;

class Tramite extends Model
{
    use HasFactory;
     /* relacion uno a muchos inversa  */
     public function cliente()
     {
         return $this->belongsTo(Cliente::class);
     }
     public function tipo_tramite()
     {
         return $this->belongsTo(Tipo_tramite::class);
     }
     public function clase()
     {
         return $this->belongsTo(Clase::class);
     }
     public function categoria()
     {
         return $this->belongsTo(Categoria::class);
     }
}
