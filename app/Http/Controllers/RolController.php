<?php

namespace App\Http\Controllers;

use App\Models\Rol;
use Illuminate\Http\Request;

class RolController extends Controller
{
    public function index(){
        $roles = Rol::all();
        return view('roles.index', compact('roles'));
    }
    public function create(){
        return view('roles.create');
    }
    public function store(Request $request){
        // return $request->all();
        Rol::create($request->all());
        return redirect()->route('roles.index')->with('success','El Rol se creó con éxito');
    }
    public function edit($id){
        $rol = Rol::find($id);
        return view('roles.edit', compact('rol'));
    }
    public function update(Request $request, $id){
        $rol = Rol::find($id);
        $rol->update($request->all());
        return redirect()->route('roles.index')->with('updated','El Rol ha sido Actualizado');
    }
    public function destroy($id){
        // return $rol;
        $rol = Rol::find($id);
        $rol->delete();
        return redirect()->route('roles.index')->with('deleted','El Rol ha sido Eliminado');
    }
}
