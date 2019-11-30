<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    protected $fillable = ['fecha','empleado_id'];
    
    /*
    public function empleado()
    {
        return $this->belongsTo(Empleado::class);
    }*/

    public function telas(){
        return $this->belongsToMany(Tela::class);
    }
}
