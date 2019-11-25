<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mesa extends Model
{
    protected $fillable = ['numero_mesa','area','enfoque','empleado_id'];
    
    public function empleado()
    {
        return $this->belongsTo(Empleado::class);
    }

    /*
    public function telas(){
        return $this->belongsToMany(Tela::class);
    }*/
}
