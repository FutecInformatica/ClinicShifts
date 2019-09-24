<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    protected $table = 'Pacientes';
    
    protected $fillable = [
        'name', 'id_obra_social'
    ];
}
