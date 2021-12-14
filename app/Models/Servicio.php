<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'precio',
        'estado',
        'personal_id'
    ];
    public function personal(){
        return $this->belongsTo('App\Models\Personal');
    }
}
