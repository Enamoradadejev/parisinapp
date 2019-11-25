@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Información de la mesa</div>

                <div class="card-body">
                    <table class="table">
                      <thead class="thead-dark">
                        <tr>
                            <th>Id</th>
                            <th>Numero de mesa</th>
                            <th>Area</th>
                            <th>Enfoque</th>
                            <td>Acciones</td>
                      </thead>
                      <tbody>
                          <!--No se cicla porque solo puede pertenecer a uno-->
                          <tr>
                            <td>{{ $mesa->numero_mesa }}</td>
                            <td>{{ $mesa->area }}</td>
                            <!--<td>{{$mesa->empleado_id}}</td>-->
                            <!--mesa.php-->
                            <td>{{$mesa->empleado->Nombre}}</td>
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