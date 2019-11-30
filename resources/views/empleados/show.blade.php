@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
        <a href="{{ route('empleados.index') }}" class="btn btn-outline-dark">Listado de Empleados</a>
        <br><br>
            <div class="card" style="width: 18rem;">

            
                <!--<img class="card-img-top" src="prueba.PNG" alt="Card image cap">-->
                <div class="card-body">
                    <h4 class="font-weight-bold">{{ $empleado->Puesto }}</h4>
                    <p class="card-text">{{ $empleado->Nombre.' '.$empleado->ApellidoP.' '.$empleado->ApellidoM }}</p>

                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">{{$empleado->Turno}}</li>
                    <li class="list-group-item">{{$empleado->Telefono}}</li>
                    <li class="list-group-item">{{$empleado->Correo}}</li>
                    <li class="list-group-item">{{ 'Mesa #: '.$empleado->mesa->numero_mesa}}</li>
                </ul>
                <div class="card-body">
                    <a href="{{ route('empleados.edit', $empleado->id) }}" class="btn btn-sm btn-warning btn-block">Editar</a>
                    <form action="{{ route('empleados.destroy', $empleado->id) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <br>
                        <button type="submit" class="btn btn-sm btn-danger btn-block">Eliminar</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-7">
        <div class="card">
            <div class="card-header">Tareas</div>
            <div class="card-body">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th>#</th>
                            <th>Titulo</th>
                            <th>Asunto</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($empleado->tareas as $tarea)
                        <tr>
                            <td>{{$tarea->id}}</td>
                            <td>{{$tarea->nombre }}</td>
                            <td>{{$tarea->asunto}}</td>
                            <td>
                                <a href="{{ route('tareas.show', $tarea->id) }}" class="btn btn-sm btn-info">Ver Tarea</a>
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