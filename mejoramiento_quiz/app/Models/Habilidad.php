<?php

namespace App\Models;

use App\Models\Empleado;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Habilidad extends Model
{
    use HasFactory;
    public function enpleados()
    {
        return $this->belongsToMany('App\Models\Empleado');
    }

}
