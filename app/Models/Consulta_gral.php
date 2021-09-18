<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consulta_gral extends Model
{
    use HasFactory;
    public function Receta_medica(){
        return $this->hasMany('app\model\Receta_medica');
    }

    public function Medico() {
        return $this->belongsTo('app\model\Medico');
}
    public function Paciente() {
    return $this->belongsTo('app\model\Paciente');
}
}
