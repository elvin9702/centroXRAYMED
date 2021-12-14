<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    protected $fillable = ['name', 'description'];
    use HasFactory;
    public function personals(){
        return $this->hasMany('App\Models\Personal');
    }
    public function medicos(){
        return $this->hasMany('App\Models\Medico');
    }
}
