<?php

namespace App\Http\Controllers;

use App\Empleado;
use App\Mesa;
use Illuminate\Http\Request;

class MesaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mesas = Mesa::all();
        return view('mesas.index',compact('mesas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $empleados = Empleado::all();
        return view('mesas.form',compact('emplados'));
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
            'numero_mesa' => 'required|min:1',
            'area' => 'required|min:6|max:8',
            'enfoque' => 'required|min:5|max:9',
            'empleado_id' => 'required|min:1'
        ]);

        //GUARDAR
        Mesa::create($request->all());
        return redirect()->route('mesas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mesa  $mesa
     * @return \Illuminate\Http\Response
     */
    public function show(Mesa $mesa)
    {
        return view('mesas.show',compact('mesa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mesa  $mesa
     * @return \Illuminate\Http\Response
     */
    public function edit(Mesa $mesa)
    {
        //return view('mesas.form',compact('mesa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mesa  $mesa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mesa $mesa)
    {
        /*
        $request->validate([
            'numero_mesa' => 'required|min:1',
            'area' => 'required|min:6|max:8',
            'enfoque' => 'required|min:5|max:9',
            'empleado_id' => 'required|min:1'
        ]);

        $mesa->numero_mesa = $request->numero_mesa;
        $mesa->area = $request->area;
        $mesa->enfoque = $request->enfoque;
        $mesa->empleado_id = $request->empleado_id;

        $mesa->save();
        return redirect()->route('mesas.show',$mesa->id);*/
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mesa  $mesa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mesa $mesa)
    {
        /*
        $mesa->delete();
        return redirect()->route('mesas.index');*/
    }
}
