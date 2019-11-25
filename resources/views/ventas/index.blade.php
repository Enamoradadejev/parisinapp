@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">

                <div class="card-body">
                  <a href="{{ route('ventas.create') }}" class="btn btn-default btn-sm">Nueva Venta</a>
                    <table class="table">
                      <thead class="thead-dark">
                        <tr>
                            <th>Folio</th>
                            <th>Fecha</th>
                            <th>Empleado</th>
                            <th>Acciones</th>
                      </thead>

                      <tbody>
                        @foreach($ventas as $venta)
                        <tr>
                            <td>{{ $venta->id }}</td>
                            <td>{{ $venta->fecha }}</td>
                            <td>{{ $venta->empleado->Nombre}}</td>
                            <td>
                            <a href="{{ route('ventas.show', $venta->id) }}" class="btn btn-sm btn-info">Ver Detalle</a>
                            </td>
                        </tr>
                        @endforeach
                      </tbody>

                    </table>                    
                </div>

            </div>
        </div>
    </div>
</div>
@endsection