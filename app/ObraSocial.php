<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ObraSocial extends Model
{
    protected $table = 'obrasSociales';
    
    protected $fillable = [
        'name'
    ];
}
