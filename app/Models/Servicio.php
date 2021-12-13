<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    use HasFactory;
    public function tipos(){
        return $this->belongsTo(Tipo::class,'id_tipo')->withDefault(['clasificacion' => 'Ninguna']);
    }
    public function clientes(){
        return $this->belongsTo(Cliente::class,'id_cliente')->withDefault(['nombre' => 'Ninguna']);
    }
    public function rutas(){
        return $this->belongsTo(Ruta::class,'id_ruta')->withDefault(['destino' => 'Ninguna']);
    }
    public function estados(){
        return $this->belongsTo(Estado::class,'id_estado')->withDefault(['situacion' => 'Ninguno']);
    }
    public function incoterms(){
        return $this->belongsTo(Incoterm::class,'id_incoterm')->withDefault(['clasificacion' => 'Ninguno']);
    }
    public function agentes(){
        return $this->belongsTo(Agente::class,'id_agente')->withDefault(['nombre' => 'Ninguno']);
    }    
}
