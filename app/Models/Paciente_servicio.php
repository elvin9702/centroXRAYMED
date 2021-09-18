<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente_servicio extends Model
{
    use HasFactory;

    public function Servicios() {
        return $this->belongsTo('app\model\Servicios');
}
    public function Personal() {
    return $this->belongsTo('app\model\Personal');
}
    public function Paciente() {
    return $this->belongsTo('app\model\Paciente');
}
}
