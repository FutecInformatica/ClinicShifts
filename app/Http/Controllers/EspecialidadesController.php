<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Especialidad;
use Laracasts\Flash\Flash;

class EspecialidadesController extends Controller
{
    public function index(){
        
        $esps = Especialidad::orderBy('name')->paginate(5);
        return view('admin.especialidades.index')->with('esps', $esps);
        
    }
    
    public function create(){
        
        return view('admin.especialidades.create');
        
    }
    
    public function store(Request $request){
        
        $esp = new Especialidad($request->all());
        $esp->save();
        
        Flash::success("La especialidad ".$esp->name." se ha guardado con exito!!!");
        
        return redirect()->route('especialidades.index');
        
    }
    
    public function show($id){
        
    }
    
    public function edit($id){
        
        $esp = Especialidad::find($id);
        return view('admin.especialidades.edit')->with('esp', $esp);
        
    }
    
    public function update(Request $request, $id){
        
        $esp = Especialidad::find($id);
        $esp->name = $request->name;
        $esp->save();
        
        Flash::success("La especialidad " . $esp->name . " se ha modificado exitosamente");
        return redirect()->route('especialidades.index');
        
    }
    
    public function destroy($id){
        
        $esp = Especialidad::find($id);
        $esp->delete();
        
        Flash::error('La especialidad ' . $esp->name . ' se ha eliminado de forma exitosa');
        return redirect()->route('especialidades.index');
        
    }
}
