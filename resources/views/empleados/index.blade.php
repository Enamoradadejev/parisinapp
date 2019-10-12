@extends('layouts.base')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
        <div class="card">
            <div class="card-header">Empleados</div>
            <div class="card-body">

                <a href="{{ route('empleados.create') }}" class="btn btn-success btn-sm">Agregar Empleado</a>
                <br/> <br/>
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th>#</th>
                            <!--<th>Foto</th>-->
                            <th>Nombre Completo</th>
                            <th>Telefono</th>
                            <th>Correo</th>
                            <th>Puesto</th>
                            <th>Turno</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        @foreach($empleados as $empleado)
                        <tr>
                            <!--<td>{{$empleado->Foto}}</td>-->
                            <td>{{$empleado->id}}</td>
                            <td>{{$empleado->Nombre.' '.$empleado->ApellidoP.' '.$empleado->ApellidoM }}</td>
                            <td>{{$empleado->Telefono}}</td>
                            <td>{{$empleado->Correo}}</td>
                            <td>{{$empleado->Puesto}}</td>
                            <td>{{$empleado->Turno}}</td>
                            <td>
                                <a href="{{ route('empleados.show', $empleado->id) }}" class="btn btn-sm btn-info">Ver Detalle</a>
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





<!--
<div class="container">
    <table class="table table-light">


        <thead class="thead-dark">
            <tr>
                <th>#</th>
                <th>Foto</th>
                <th>Nombre Completo</th>
                <th>Telefono</th>
                <th>Correo</th>
                <th>Puesto</th>
                <th>Turno</th>
                <th>Acciones</th>
            </tr>
        </thead>


        <tbody>
         $empleados -> FUE DECLARAD EN EMPLEADOCONTROLLER 
        @foreach($empleados as $empleado)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$empleado->Foto}}</td>
                <td>{{$empleado->Nombre.' '.$empleado->ApellidoP.' '.$empleado->ApellidoM }}</td>
                <td>{{$empleado->Telefono}}</td>
                <td>{{$empleado->Correo}}</td>
                <td>{{$empleado->Puesto}}</td>
                <td>{{$empleado->Turno}}</td>
                <td>
                
                <a href="{{ url('/empleados/'.$empleado->id.'/edit') }}">
                    Editar
                </a>
                
                | 

                <form method="post" action="{{url('/empleados/'.$empleado->id)}}">

                TOKEN
                {{csrf_field()}}
                {{ method_field('DELETE')}}
                <button type="submit" onclick="return confirm('¿Desea borrar el registo?');">Borrar</button>
                    
                </form>


                </td>
            </tr>

        @endforeach
        </tbody>
    </table>

</div>-->

@endsection