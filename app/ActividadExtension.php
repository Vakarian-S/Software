<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActividadExtension extends Model
{
    protected $fillable = [
        'nombre', 'localizacion', "organizador", "orador", "fecha", "cantAsistentes", "evidencia"
        , "Convenioid"
    ]; //

    public function convenio(){
        return $this->belongsTo('App\Convenio');
    }
    ////
}
