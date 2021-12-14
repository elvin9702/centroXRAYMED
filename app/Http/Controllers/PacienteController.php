<?php

namespace App\Http\Controllers;

use App\Models\Medico;
use App\Models\Paciente;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
    public function index(){
        $pacientes = Paciente::all();
        return view('pacientes.index', compact('pacientes'));
    }
    public function create(){
        $medicos = Medico::all();
        return view('pacientes.create', compact('medicos'));
    }
    public function store(Request $request){
        // return $request->all();
        Paciente::create($request->all());
        return redirect()->route('pacientes.index')->with('success','El Paciente '.$request->nombres.' se creó con éxito');
    }
    public function edit($id){
        $paciente = Paciente::find($id);
        $medicos = Medico::all();
        return view('pacientes.edit', compact('paciente', 'medicos'));
    }
    public function update(Request $request, $id){
        $paciente = Paciente::find($id);
        $paciente->update($request->all());
        return redirect()->route('pacientes.index')->with('updated','El Paciente con ID: '.$paciente->id.' ha sido Actualizado');
    }
    public function destroy($id){
        // return $rol;
        $paciente = Paciente::find($id);
        $paciente->delete();
        return redirect()->route('pacientes.index')->with('deleted','El Paciente con ID: '.$paciente->id.' ha sido Eliminado');
    }
}
