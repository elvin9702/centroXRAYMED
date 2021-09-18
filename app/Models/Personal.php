<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    use HasFactory;

    public function Rol() {
        return $this->belongsTo('app\model\Rol');
}
    public function servicios(){
        return $this->hasMany('app\model\servicios');
    }
    public function Paciente_servicio(){
        return $this->hasMany('app\model\Paciente_servicio');
    }
}
