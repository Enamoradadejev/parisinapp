<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mesa extends Model
{
    protected $table = 'mesas';
    protected $fillable = ['numero_mesa','area','enfoque'];
    
    public function empleados()
    {
        return $this->hasMany('App\Empleado');
    }
    
    /*public function empleado()
    {
        return $this->belongsTo(Empleado::class);
    }*/
    /*
    public function telas(){
        return $this->belongsToMany(Tela::class);
    }*/
}
