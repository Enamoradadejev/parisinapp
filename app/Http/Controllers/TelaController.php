<?php

namespace App\Http\Controllers;

use App\Tela;
use App\Venta;
use Illuminate\Http\Request;

class TelaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //EVITAR DOBLE CONSULTA 
        $telas = Tela::with('ventas:id,fecha')->get();
        //$telas = Tela::with('ventas:id,fecha')->with('jeje')->get();
        return view('telas.index',compact('telas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ventas = Venta::pluck('fecha','id');
        return view('telas.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request->all());
        $tela = Tela::create($request->all());
        //$tela = Tela::create($request->only('nombre_tela'));

        //attach -> Hace la relacion. De la tela voy a crear un enlace de ese ID
        $tela->ventas()->attach($request->venta_id);
        return redirect()->route('venta.show',$tela->id);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tela  $tela
     * @return \Illuminate\Http\Response
     */
    public function show(Tela $tela)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tela  $tela
     * @return \Illuminate\Http\Response
     */
    public function edit(Tela $tela)
    {
        $ventas = Venta::pluck('fecha','id');
        $seleccionados = $tela->ventas()->pluck('id');
        return view('telas.form',compact('ventas','telas','seleccionados'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tela  $tela
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tela $tela)
    {
        //SOLO EDITA INFO DE LA TELA.
        $tela->nombre_tela = $request->nombre_tela;
        $tela->save();

        //SINCRONIZA CON LOS ELEMENTOS.
        $tela->ventas()->sync($request->venta_id);
        return redirect()->route('venta.show',$tela->id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tela  $tela
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tela $tela)
    {
        //
    }
}
