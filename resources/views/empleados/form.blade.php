@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if(isset($empleado))
                      <form action="{{ route('empleados.update', $empleado->id) }}" method="POST">
                      <input type="hidden" name="_method" value="PATCH">
                    @else
                      <form action="{{ route('empleados.store') }}" method="POST">
                    @endif
                    
                      @csrf
                      <div class="form-group">
                          <label for="Nombre">Nombre</label>
                          <input type="text" name="Nombre" value="{{ $empleado->Nombre ?? '' }}" class="form-control" id="Nombre">
                      </div>
                      <div class="form-group">
                          <label for="ApellidoP">Apellido Paterno</label>
                          <input type="text" name="ApellidoP" value="{{ $empleado->ApellidoP ?? '' }}" class="form-control" id="ApellidoP">
                      </div>
                      <div class="form-group">
                          <label for="ApellidoM">Apellido Materno</label>
                          <input type="text" name="ApellidoM" value="{{ $empleado->ApellidoM ?? '' }}" class="form-control" id="ApellidoM">
                      </div>
                      <div class="form-group">
                          <label for="Telefono">Telefono</label>
                          <input type="text" name="Telefono" value="{{ $empleado->Telefono ?? '' }}" class="form-control" id="Telefono">
                      </div>
                      <div class="form-group">
                          <label for="Correo">Correo</label>
                          <input type="email" name="Correo" value="{{ $empleado->Correo ?? '' }}" class="form-control" id="Correo">
                      </div>
                      <div class="form-group">
                          <label for="Puesto">Puesto</label>
                          <input type="text" name="Puesto" value="{{ $empleado->Puesto ?? '' }}" class="form-control" id="Puesto">
                      </div>
                      <div class="form-group">
                          <label for="Turno">Turno</label>
                          <input type="text" name="Turno" value="{{ $empleado->Turno ?? '' }}" class="form-control" id="Turno">
                      </div>
                      <div class="form-group">
                          <label for="Foto">Foto</label>
                          <input type="text" name="Foto" value="{{ $empleado->Foto ?? '' }}" class="form-control" id="Foto">
                      </div>

                      <button type="submit" class="btn btn-primary">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection