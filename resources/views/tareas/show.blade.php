@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card">
                <div class="card-header">Detalle de la Tarea</div>

                <div class="card-body">
                  <a href="{{ route('tareas.index') }}" class="btn btn-outline-dark">Listado de Tareas</a>
                  <br><br>
                    <table class="table">
                      <thead class="thead-dark">
                        <tr>
                            <th>#</th>
                            <th>Titulo</th>
                            <th>Asunto</th>
                            <th>Descripcion</th>
                            <th>Acciones</th>
                      </thead>
                      <tbody>
                          <tr>
                            <td>{{$tarea->id}}</td>
                            <td>{{$tarea->nombre}}</td>
                            <td>{{$tarea->asunto}}</td>
                            <td>{{$tarea->descripcion}}</td>
                            <td>
                              <a href="{{ route('tareas.edit', $tarea->id) }}" class="btn btn-sm btn-warning btn-block">Editar</a>
                                <form action="{{ route('tareas.destroy', $tarea->id) }}" method="POST">
                                  @method('DELETE')
                                  @csrf
                                  <br>
                                  <button type="submit" class="btn btn-sm btn-danger btn-block">Eliminar</button>
                                </form>
                            </td>
                          </tr>
                      </tbody>
                    </table>

                    <h5>¿Quien debe hacer la tarea?</h5>
                    <ul>
                      @foreach($tarea->empleados as $empleado)
                        <li>{{ $empleado->Nombre }}</li>
                      @endforeach
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-md-5">
          @include('archivos.archivoForm', ['modelo_id' => $tarea->id, 'modelo_type' => 'App\Tarea'])
          <br>
          @include('archivos.archivoIndex', ['archivos' => $tarea->archivos])
        </div>

    </div>
</div>
@endsection