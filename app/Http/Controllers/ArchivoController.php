<?php

namespace App\Http\Controllers;

use App\Archivo;
use Illuminate\Http\Request;



class ArchivoController extends Controller
{
    public function archivoForm()
    {
        return view('archivos.archivoForm');
    }

    public function archivoPost(Request $request)
    {
        $arhivoCargado = $request->archivo->store('cargas');

        $archivo = Archivo::create([
            'original' => $request->archivo->getClientOriginalName(),
            'hash' => $archivoCargado,
            'mime' => $request->archivo->getClientMimeType(),
            'size' => $request->archivo->getClientSize(),
            'ruta' => ''
        ]);

        //GUARDA ARCHIVA Y DEVUELVE A RUTA DONDE SE GUARDO
        //$request->file('archivo')->store('cargas');
        return redirect()->back();
    }
}
