<?php

namespace App\Models;

use App\Models\Habilidad;
use App\Models\Hjo;
use App\Models\Departamento;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;

    public function habilidads()
    {
        return $this->belongsToMany('App\Models\Habilidad');
    }
    public function hjos()
    {
        return $this->hasMany('App\Models\Hjo');
    }
    public function deparamento()
    {
        return $this->belongsTo('App\Models\Departamento');
    }
}
