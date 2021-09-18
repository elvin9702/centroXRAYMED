<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    use HasFactory;

    public function Personal() {
        return $this->hasMany('app\model\personal');
}
public function Medico() {
    return $this->hasMany('app\model\Medico');
}
}
