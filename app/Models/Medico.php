<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    use HasFactory;
    protected $fillable =[
        'nombres',
        'f_nacimiento',
        'genero',
        'estado',
        'celular',
        'direccion',
        'rol_id'
    ];
    public function rol(){
        return $this->belongsTo('App\Models\Rol');
    }
    public function paciente(){
        return $this->hasMany('App\Models\Paciente');
    }
}
