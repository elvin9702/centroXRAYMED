<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receta_medica extends Model
{
    use HasFactory;

    public function Consulta_gral() {
        return $this->belongsTo('app\model\Consulta_gral');
}
public function Historial(){
    return $this->hasMany('app\model\historial');
}
}
