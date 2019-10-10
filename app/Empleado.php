<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $table = 'empleados';
    public $timestamps = false;
    protected $fillable = ['Nombre', 'ApellidoP', 'ApellidoM','Telefono','Correo','Puesto','Turno','Foto'];
}
