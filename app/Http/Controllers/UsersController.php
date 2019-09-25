<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Laracasts\Flash\Flash;


class UsersController extends Controller
{
    public function index(){
        $users = User::orderBy('id', 'ASC')->paginate(5);
        return view('admin.users.index')->with('users', $users);
    }
    
    public function create(){
        
        return view('admin.users.create');
        
    }
    
    public function store(Request $request){
        
        $user = new User($request->all());
        $user->password = bcrypt($request->password);
        $user->save();
        
        Flash::success("El usuario ".$user->first_name." se ha guardado con exito!!!");
        
        return redirect()->route('users.index');
        
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
