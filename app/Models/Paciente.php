<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;
    protected $fillable =[
        'nombres',
        'edad',
        'genero',
        'celular',
        'medico_id'
    ];
    public function medico(){
        return $this->belongsTo('App\Models\Medico');
    }
}
