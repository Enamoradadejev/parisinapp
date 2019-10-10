<?php

namespace App\Http\Controllers;

use App\Empleado;
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

        /*
        $datos['empleados'] = Empleado::paginate(5);
        return view('empleados.index',$datos);*/
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('empleados.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        Empleado::create($request->all());
        return redirect()->route('empleados.index');

        /*$datosEmpleado = request()->all();
        $datosEmpleado = request()->except('_token');

        //INSERTAR EN LA BASE DE DATOS
        Empleado::insert($datosEmpleado);
        
        //return response()->json($datosEmpleado);
        return redirect()->route('empleados.index');*/
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
    public function edit(Empleado $empleado)
    {

        return view('empleados.form', compact('empleado'));

        /*
        //DEVULVE TODA LA INFO QUE CORRESPONDE A ESE ID
        $empleado = Empleado::findOrFail($id);
        //ENVIA LA INFORMACION DEL $empleado
        return view('empleados.edit',compact('empleado'));*/
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

        $empleado->Nombre = $request->Nombre;
        $empleado->ApellidoP = $request->ApellidoP;
        $empleado->ApellidoM = $request->ApellidoM;
        $empleado->Correo = $request->Correo;
        $empleado->Telefono = $request->Telefono;
        $empleado->Puesto = $request->Puesto;
        $empleado->Turno = $request->Turno;
        $empleado->Foto = $request->Foto;

        $empleado->save();
        return redirect()->route('empleados.show', $empleado->id);

        /*
        $datosEmpleado = request()->except(['_token','_method']);
        EmpleadoDB::where('id','=',$id)->update($datosEmpleado);

        //DEVULVE TODA LA INFO QUE CORRESPONDE A ESE ID
        $empleado = Empleado::findOrFail($id);
        //ENVIA LA INFORMACION DEL $empleado
        return view('empleados.edit',compact('empleado'));*/

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
