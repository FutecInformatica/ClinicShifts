<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Especialidad extends Model
{
    protected $table = 'Especialidades';
    
    protected $fillable = [
        'name'
    ];
    
    public function medicos(){
        return $this->belongsToMany('App\Medico');
    }
}
