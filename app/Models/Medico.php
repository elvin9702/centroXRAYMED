<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    use HasFactory;

    public function Rol() {
        return $this->belongsTo('app\model\Rol');
}
    public function Consulta_gral(){
        return $this->hasMany('app\model\Consulta_gral');
    }
    public function Paciente(){
        return $this->hasMany('app\model\Paciente');
    }
}
