<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Historial extends Model
{
    use HasFactory;
    public function Paciente() {
        return $this->belongsTo('app\model\Paciente');
    }
    public function Receta_medica() {
        return $this->belongsTo('app\model\Receta_medica');
    }
    public function Resultados() {
        return $this->belongsTo('app\model\Resultados');
    }
}
