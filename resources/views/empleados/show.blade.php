@extends('layouts.base')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Información del Empleado</div>

                <div class="card-body">
                  <a href="{{ route('empleados.index') }}" class="btn btn-default btn-sm">Listado de Empleados</a>
                    <table class="table">
                      <thead class="thead-dark">
                        <tr>
                            <th>ID</th>
                            <th>Nombre Completo</th>
                            <th>Telefono</th>
                            <th>Correo</th>
                            <th>Puesto</th>
                            <th>Turno</th>
                            <th>Acciones</th>
                      </thead>
                      <tbody>
                          <tr>
                            <td>{{$empleado->id}}</td>
                            <td>{{$empleado->Nombre}}</td>
                            <td>{{$empleado->Telefono}}</td>
                            <td>{{$empleado->Correo}}</td>
                            <td>{{$empleado->Puesto}}</td>
                            <td>{{$empleado->Turno}}</td>
                            <td>
                              <a href="{{ route('empleados.edit', $empleado->id) }}" class="btn btn-sm btn-warning">Editar</a>
                              <form action="" method="POST">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                              </form>
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