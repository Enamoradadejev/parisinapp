@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Información de la Venta</div>

                <div class="card-body">
                    <table class="table">
                      <thead class="thead-dark">
                        <tr>
                            <th>Folio</th>
                            <th>Fecha</th>
                            <th>Empleado</th>
                            <th>Acciones</th>
                      </thead>
                      <tbody>
                          <!--No se cicla porque solo puede pertenecer a uno-->
                          <tr>
                            <td>{{$venta->id}}</td>
                            <td>{{$venta->fecha}}</td>
                            <!--<td>{{$venta->empleado_id}}</td>-->
                            <!--Venta.php-->
                            <td>{{$venta->empleado->Nombre}}</td>
                            <td>
                              
                            </td>
                          </tr>
                      </tbody>
                    </table>                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection