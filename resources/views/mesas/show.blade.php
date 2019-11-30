@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
          <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h5 class="font-weight-bold">{{ 'Mesa #: '.$mesa->numero_mesa }}</h5>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">{{ $mesa->area }}</li>
              <li class="list-group-item">{{ $mesa->enfoque}}</li>
            </ul>
            <div class="card-body">
              <a href="{{ route('mesas.edit', $mesa->id) }}" class="btn btn-sm btn-block btn-warning">Editar</a>
              <br>
              <form action="{{ route('mesas.destroy', $mesa->id) }}" method="POST">
                  @method('DELETE')
                  @csrf
                  <button type="submit" class="btn btn-sm btn-block btn-danger">Eliminar</button>
              </form>
            </div>
          </div>
        </div>

        <div class="col-md-7">
          <div class="card">
              <div class="card-header">Empleados de la mesa</div>
              <div class="card-body">
                <h5>MATUTINO.</h5>
                <ul>
                  @foreach($mesa->empleados as $empleado)
                    @if($empleado->Turno == 'Matutino')
                    <li>{{ $empleado->Nombre.' '.$empleado->ApellidoP.' '.$empleado->ApellidoM }}</li>
                    @endif
                  @endforeach
                </ul>
                
                <h5>VESPERTINO.</h5>
                <ul>
                  @foreach($mesa->empleados as $empleado)
                    @if($empleado->Turno == 'Vespertino')
                    <li>{{ $empleado->Nombre.' '.$empleado->ApellidoP.' '.$empleado->ApellidoM }}</li>
                    @endif
                  @endforeach
                </ul>  

              </div>
          </div>
        </div>
    </div>
</div>
@endsection