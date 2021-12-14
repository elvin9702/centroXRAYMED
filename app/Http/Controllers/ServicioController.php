<?php

namespace App\Http\Controllers;

use App\Models\Personal;
use App\Models\Servicio;
use Illuminate\Http\Request;

class ServicioController extends Controller
{
    public function index(){
        $servicios = Servicio::all();
        return view('servicios.index', compact('servicios'));
    }
    public function create(){
        $personales = Personal::all();
        return view('servicios.create', compact('personales'));
    }
    public function store(Request $request){
        Servicio::create($request->all());
        return redirect()->route('servicios.index')->with('success','El Servicio se creó con éxito');
    }
    public function edit($id){
        $servicio = Servicio::find($id);
        $personales = Personal::all();
        return view('servicios.edit', compact('servicio', 'personales'));
    }
    public function update(Request $request, $id){
        // return $request->all();
        $servicios = Servicio::find($id);
        $servicios->update($request->all());
        return redirect()->route('servicios.index')->with('updated','El Servicio ha sido Actualizado');
    }
    public function destroy($id){
        // return $rol;
        $servicios = Servicio::find($id);
        $servicios->delete();
        return redirect()->route('servicios.index')->with('deleted','El Servicio '.$servicios->nombre.' ha sido Eliminado');
    }
}
