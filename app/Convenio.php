<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Convenio extends Model
{

    protected $fillable = [
        'fechaInicio', 'fechaTermino', "tipoConvenio", "evidencia", "Organizacionid"
    ]; //

    public function organizacion(){
        return $this->belongsTo('App\Organizacion');
    }

    public function actividadesExtension(){
        return $this->hasMany('App\ActividadExtension');
    }
    //
}
