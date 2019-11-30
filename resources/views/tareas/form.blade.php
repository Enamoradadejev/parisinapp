@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">

                {{-- Muestra errores --}}
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if(isset($tarea))
                    {!! Form::model($tarea, ['route' => ['tareas.update', $tarea->id], 'method' => 'PATCH']) !!}
                @else
                    {!! Form::open(['route' => 'tareas.store']) !!}
                @endif
                
                @csrf

                <div class="col-md-12">
                    <div class="form-group">
                        {!! Form::label('nombre', 'Titulo:') !!}
                        {!! Form::text('nombre', null, ['class' => 'form-control'])  !!}
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('asunto', 'Asunto:') !!}
                        {!! Form::select('asunto', [
                            'Limpieza' => 'Limpieza', 
                            'Pendientes' => 'Pendientes', 
                            'Descarga' => 'Descargas', 
                            'Anuncio' => 'Anuncio',
                        ], null, 
                        ['placeholder' => 'Selecciona una opcion...']) !!}
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        {!! Form::label('descripcion', 'Descripcion: ') !!}
                        {!! Form::textarea('descripcion', null, ['class' => 'form-control'])  !!}
                    </div>
                </div>

                <div class="col-md-12">
                    <select multiple name="empleado_id[]" class="form-control">
                        @foreach($empleados ?? '' as $empleado)
                            <option value="{{ $empleado->id }}">{{ $empleado->Nombre }}</option>
                        @endforeach
                    </select>
                </div>
                
                <br><br>

                <div class="col-md-12">
                    <button type="submit" class="btn btn-danger btn-block">Agregar</button>
                </div>

                </form>
        </div>
    </div>
</div>
@endsection