<?php

namespace App\Http\Controllers;

use App\Models\Medico;
use App\Models\Personal;
use App\Models\Rol;
use Illuminate\Http\Request;

class MedicoController extends Controller
{
    public function index(){
        $medicos = Medico::all();
        return view('medicos.index', compact('medicos'));
    }
    public function create(){
        $roles = Rol::all();
        return view('medicos.create', compact('roles'));
    }
    public function store(Request $request){
        // return $request->all();
        Medico::create($request->all());
        return redirect()->route('medicos.index')->with('success','El Medico se creó con éxito');
    }
    public function edit($id){
        $medico = Medico::find($id);
        $roles = Rol::all();
        return view('medicos.edit', compact('medico', 'roles'));
    }
    public function update(Request $request, $id){
        // return $request->all();
        $medicos = Medico::find($id);
        $medicos->update($request->all());
        return redirect()->route('medicos.index')->with('updated','El Medico ha sido Actualizado');
    }
    public function destroy($id){
        // return $rol;
        $medicos = Medico::find($id);
        $medicos->delete();
        return redirect()->route('medicos.index')->with('deleted','El Medico '.$medicos->nombres.' ha sido Eliminado');
    }
}
