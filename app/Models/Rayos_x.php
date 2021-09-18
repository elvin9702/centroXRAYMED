<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rayos_x extends Model
{
    use HasFactory;

    public function Paciente() {
        return $this->belongsTo('app\model\Paciente');
    }
}
