<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resultados extends Model
{
    use HasFactory;

    public function historial(){
        return $this->hasMany('app\model\historial');
    }
    public function Laboratorio() {
        return $this->belongsTo('app\model\laboratorio');
    }
}
