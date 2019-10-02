<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ObraSocial;
use Laracasts\Flash\Flash;

class OSController extends Controller
{
    public function index(){
        
        $oss = ObraSocial::orderBy('id', 'ASC')->paginate(5);
        return view('admin.os.index')->with('oss', $oss);
        
    }
    
    public function create(){
        
        return view('admin.os.create');
        
    }
    
    public function store(Request $request){
        
        $os = new ObraSocial($request->all());
        $os->save();
        
        Flash::success("La obra social ".$os->name." se ha guardado con exito!!!");
        
        return redirect()->route('os.index');
        
    }
    
    public function show($id){
        
    }
    
    public function edit($id){
        
        $os = ObraSocial::find($id);
        return view('admin.os.edit')->with('os', $os);
        
    }
    
    public function update(Request $request, $id){
        
        $os = ObraSocial::find($id);
        $os->name = $request->name;
        $os->save();
        
        Flash::success("La obra social " . $os->name . " se ha modificado exitosamente");
        return redirect()->route('os.index');
        
    }
    
    public function destroy($id){
        
        $os = ObraSocial::find($id);
        $os->delete();
        
        Flash::error('La obra social ' . $os->name . ' se ha eliminado de forma exitosa');
        return redirect()->route('os.index');
        
    }
}
