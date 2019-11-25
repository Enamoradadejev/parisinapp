@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">

                <div class="card-body">
                  <a href="{{ route('mesas.create') }}" class="btn btn-default btn-sm">Nueva mesa</a>
                    <table class="table">
                      <thead class="thead-dark">
                        <tr>
                            <th>Id</th>
                            <th>Numero de mesa</th>
                            <th>Area</th>
                            <th>Enfoque</th>
                      </thead>

                      <tbody>
                        @foreach($mesas as $mesa)
                        <tr>
                            <td>{{ $mesa->id }}</td>
                            <td>{{ $mesa->numero_mesa }}</td>
                            <td>{{ $mesa->area }}</td>
                            <td>{{ $mesa->enfoque }}</td>
                            <td>{{ $mesa->empleado->Nombre}}</td>
                            <td>
                            <a href="{{ route('mesas.show', $mesa->id) }}" class="btn btn-sm btn-info">Ver Detalle</a>
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