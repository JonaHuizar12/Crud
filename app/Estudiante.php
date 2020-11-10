<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{

    protected $fillable = [
        'grupo_id','nombre','apellidos','edad','email','telefono'
    ];

    public function group(){
        return $this->belongsTo('App\Grupos');
    }
}
