<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Turno extends Model
{
    protected $table = "Turnos";
    
    protected $fillable = ['id_paciente', 'id_medico', 'turno'];
}
