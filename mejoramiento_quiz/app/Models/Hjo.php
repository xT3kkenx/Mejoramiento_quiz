<?php

namespace App\Models;

use App\Models\Empleado;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hjo extends Model
{
    use HasFactory;

    public function enpleados()
    {
        return $this->hasMany('App\Models\Empleado');
    }
}
