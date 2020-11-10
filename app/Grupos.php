<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grupos extends Model
{
    
    protected $fillable = [
        'semestre','grupo','turno',
    ];

   public function students(){
       return $this->hasMany('App\Estudiante');
   }
}
