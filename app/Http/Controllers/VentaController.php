<?php

namespace App\Http\Controllers;

//AÑADIR EL MODELO DEL FOREIGN KEY
use App\Empleado;
use App\Venta;
use Illuminate\Http\Request;

class VentaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ventas = Venta::all();
        return view('ventas.index', compact('ventas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        /*$empleados = Empleado::pluck('Nombre','id');
        return view('ventas.form',compact('empleados'));*/

        $empleados = Empleado::all();
        return view('ventas.form',compact('empleados'));
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
            'fecha' => 'required|date',
            'empleado_id' => 'required|min:1'
            //'email' => 'required|integer|min:1|unique:ventas,correo'
        ]);

        //PARA GUARDAR DE MANERA SENCILLA
        Venta::create($request->all());
        return redirect()->route('ventas.index');

        /*$venta = new Venta([
            'fecha' => $request->fecha
        ]);

        $empleado = Empleado::find($request->empleado_id);
        $empleado->ventas()->save($venta);*/
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Venta  $venta
     * @return \Illuminate\Http\Response
     */
    public function show(Venta $venta)
    {
        return view('ventas.show',compact('venta'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Venta  $venta
     * @return \Illuminate\Http\Response
     */
    public function edit(Venta $venta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Venta  $venta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Venta $venta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Venta  $venta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Venta $venta)
    {
        //
    }
}
