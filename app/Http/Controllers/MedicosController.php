<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Especialidad;
use App\Medico;
use Laracasts\Flash\Flash;

class MedicosController extends Controller
{
    public function index(){
        
        $medicos = Medico::orderBy('name')->paginate(10);
        $medicos->each(function($medicos){
           $medicos->especialidades;
        });
        
        return view('admin.medicos.index')
            ->with('medicos', $medicos);
        
    }
    
    public function create(){
        
        $esps = Especialidad::orderBy('name')->pluck('name', 'id');
        return view('admin.medicos.create')->with('esps', $esps);
        
    }
    
    public function store(Request $request){
        
        $medico = new Medico($request->all());
        $medico->save();
        
        $medico->especialidades()->sync($request->esps);
        
        Flash::success('El Nuevo Medico ' . $medico->name .' se ha registrado exitosamente.');
        return redirect()->route('medicos.index');
        
    }
    
    public function show($id){
        
    }
    
    public function edit($id){
        
    }
    
    public function update(Request $request, $id){
        
    }
    
    public function destroy($id){
        
    }
}
