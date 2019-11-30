<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $fillable = ['Nombre', 'ApellidoP', 'ApellidoM','Telefono','Correo','Puesto','Turno','mesa_id'];

    public function mesa()
    {
        return $this->belongsTo(Mesa::class);
    }

    public function tareas()
    {
        return $this->belongsToMany(Tarea::class);
    }

    public function archivos()
    {
        return $this->morphMany(Archivo::class, 'modelo');
    }
}
