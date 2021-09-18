<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laboratorio extends Model
{
    use HasFactory;
    public function Paciente() {
        return $this->belongsTo('app\model\Paciente');
    }
    public function Resultados(){
        return $this->hasMany('app\model\Resultados');
    }
}
