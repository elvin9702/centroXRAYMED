<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;

    public function Medico() {
        return $this->belongsTo('app\model\Medico');
}
    public function Paciente_servicio(){
    return $this->hasMany('app\model\Paciente_servicio');
}
    public function Rayosx(){
    return $this->hasMany('app\model\Rayosx');
}
    public function Ecografia(){
    return $this->hasMany('app\model\Ecografia');
}
public function Laboratorio(){
    return $this->hasMany('app\model\Laboratorio');
}
    public function Consulta_gral(){
    return $this->hasMany('app\model\Consulta_gral');
}
public function Historial(){
    return $this->hasMany('app\model\Historial');
}
}
