<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'apellido',
        'edad',
        'celular',
        'estado',
        'rol_id'
    ];
    public function rol(){
        return $this->belongsTo('App\Models\Rol');
    }
    public function service(){
        return $this->belongsTo('App\Models\Service');
    }
}
