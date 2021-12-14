<?php

namespace App\Http\Controllers;

use App\Models\Personal;
use App\Models\Rol;
use Illuminate\Http\Request;

class PersonalController extends Controller
{
    public function index(){
        $personales = Personal::all();
        return view('personales.index', compact('personales'));
    }
    public function create(){
        $roles = Rol::all();
        return view('personales.create', compact('roles'));
    }
    public function store(Request $request){
        // return $request->all();
        Personal::create($request->all());
        return redirect()->route('personales.index')->with('success','El Personal se creó con éxito');
    }
    public function edit($id){
        $roles = Rol::all();
        $personal = Personal::find($id);
        return view('personales.edit', compact('personal', 'roles'));
    }
    public function update(Request $request, $id){
        // return $request->all();
        $personales = Personal::find($id);
        $personales->update($request->all());
        return redirect()->route('personales.index')->with('updated','El Personal ha sido Actualizado');
    }
    public function destroy($id){
        // return $rol;
        $personales = Personal::find($id);
        $personales->delete();
        return redirect()->route('personales.index')->with('deleted','El Personal ha sido Eliminado');
    }
}
