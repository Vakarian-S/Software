<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActividadASP extends Model
{

    protected $fillable = [
        'nombre', 'asignatura', "profesor", "cantEstudiantes", "periodo","evidencia"
    ]; //
    //
}
