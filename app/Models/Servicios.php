<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicios extends Model
{
    use HasFactory;

    public function Personal() {
        return $this->belongsTo('app\model\Personal');
}
public function Paciente_servicio(){
    return $this->hasMany('app\model\Paciente_servicio');
}
}
