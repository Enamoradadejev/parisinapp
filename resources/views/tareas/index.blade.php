@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
        <div class="card">
            <div class="card-header">Tareas</div>
            <div class="card-body">

                <a href="{{ route('tareas.create') }}" class="btn btn-success btn-sm">Agregar Tarea</a>
                <br/> <br/>
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th>#</th>
                            <!--<th>Foto</th>-->
                            <th>Titulo</th>
                            <th>Asunto</th>
                            <th>Descripcion</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        @foreach($tareas as $tarea)
                        <tr>
                            <!--<td>{{$tarea->Foto}}</td>-->
                            <td>{{$tarea->id}}</td>
                            <td>{{$tarea->nombre}}</td>
                            <td>{{$tarea->asunto}}</td>
                            <td>{{$tarea->descripcion}}</td>
                            <td>
                                <a href="{{ route('tareas.show', $tarea->id) }}" class="btn btn-sm btn-info">Ver Detalle</a>
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