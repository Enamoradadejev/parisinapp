<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tela extends Model
{
    protected $fillable = ['nombre_tela'];
    public function ventas(){
        return $this->belongsToMany(Venta::class);
    }
}
