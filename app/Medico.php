<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    protected $table = 'Medicos';
    
    protected $fillable = [
        'name', 'id_especialidades'
    ];
}
