<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Obra_Social extends Model
{
    protected $table = "obrasSociales";
    
    protected $fillable = ['name'];
}
