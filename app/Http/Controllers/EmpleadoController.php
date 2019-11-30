<?php

namespace App\Http\Controllers;

use App\Empleado;
use App\Mesa;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empleados = Empleado::all();
        return view('empleados.index', compact('empleados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mesas = Mesa::all();
        return view('empleados.form',compact('mesas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) 
    {

        //DARLE SEGURIDAD PARA CUANDO NO INGRESEN NADA
        $request->validate([
            'Nombre' => 'required|min:1|max:30',
            'ApellidoP' => 'required|min:1|max:50',
            'ApellidoM' => 'required|min:1|max:50',
            'Telefono' => 'required|min:10|max:13',
            'Correo' => 'required|min:13|max:255',
            'Puesto' => 'required|min:3|max:255',
            'Turno' => 'required|min:7|max:10',
            'mesa_id' => 'required|min:1'
        ]);

        Empleado::create($request->all());
        return redirect()->route('empleados.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function show(Empleado $empleado)
    {
        return view('empleados.show', compact('empleado'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function edit(Empleado $empleado) {
        $mesas = Mesa::all();
        return view('empleados.form', compact('empleado','mesas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Empleado $empleado)
    {
        
        $request->validate([
            'Nombre' => 'required|min:1|max:30',
            'ApellidoP' => 'required|min:1|max:50',
            'ApellidoM' => 'required|min:1|max:50',
            'Telefono' => 'required|min:10|max:13',
            'Correo' => 'required|min:13|max:255',
            'Puesto' => 'required|min:3|max:255',
            'Turno' => 'required|min:7|max:10'
        ]);

        $empleado->Nombre = $request->Nombre;
        $empleado->ApellidoP = $request->ApellidoP;
        $empleado->ApellidoM = $request->ApellidoM;
        $empleado->Correo = $request->Correo;
        $empleado->Telefono = $request->Telefono;
        $empleado->Puesto = $request->Puesto;
        $empleado->Turno = $request->Turno;

        $empleado->save();
        return redirect()->route('empleados.show', $empleado->id);
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function destroy(Empleado $empleado) 
    {
        
        $empleado->delete();
        return redirect()->route('empleados.index');
        
    }
}
