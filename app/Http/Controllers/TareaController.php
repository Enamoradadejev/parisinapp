<?php

namespace App\Http\Controllers;

use App\Empleado;
use App\Tarea;
use Illuminate\Http\Request;

class TareaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tareas = Tarea::all();
        return view('tareas.index',compact('tareas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //pluck
        $empleados = Empleado::all();
        return view('tareas.form',compact('empleados'));
        return view('tareas.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|min:1|max:30',
            'asunto' => 'required|min:1|max:50',
            'descripcion' => 'required|min:1|max:80'            
        ]);

        //sync
        //desattach
        $tarea = Tarea::create($request->all());
        //arreglo
        $tarea->empleados()->attach($request->empleado_id);
        return redirect()->route('tareas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tarea  $tarea
     * @return \Illuminate\Http\Response
     */
    public function show(Tarea $tarea)
    {
        return view('tareas.show',compact('tarea'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tarea  $tarea
     * @return \Illuminate\Http\Response
     */
    public function edit(Tarea $tarea)
    {
        $empleados = Empleado::all();
        return view('tareas.form', compact('tarea','empleados'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tarea  $tarea
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tarea $tarea)
    {
        $request->validate([
            'nombre' => 'required|min:1|max:30',
            'asunto' => 'required|min:1|max:50',
            'descripcion' => 'required|min:1|max:80'            
        ]);

        $tarea->nombre = $request->nombre;
        $tarea->asunto = $request->asunto;
        $tarea->descripcion = $request->descripcion;
        $tarea->empleados()->sync($request->empleado_id);

        $tarea->save();
        return redirect()->route('tareas.show', $tarea->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tarea  $tarea
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tarea $tarea)
    {
        $tarea->delete();
        return redirect()->route('tareas.index');
    }
}
