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

                @if(isset($empleado))
                    {!! Form::model($empleado, ['route' => ['empleados.update', $empleado->id], 'method' => 'PATCH']) !!}
                @else
                    {!! Form::open(['route' => 'empleados.store']) !!}
                @endif
                
                @csrf

                <div class="col-md-12">
                    <div class="form-group">

                        {!! Form::label('Nombre', 'Nombre(s):') !!}
                        {!! Form::text('Nombre', null, ['class' => 'form-control'])  !!}

                        <!--<label for="Nombre">Nombre</label>
                        <input type="text" name="Nombre" value="{{ $empleado->Nombre ?? '' }}" class="form-control" id="Nombre">-->
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">

                        {!! Form::label('ApellidoP', 'Apellido Paterno') !!}
                        {!! Form::text('ApellidoP', null, ['class' => 'form-control'])  !!}

                        <!--<label for="ApellidoP">Apellido Paterno</label>
                        <input type="text" name="ApellidoP" value="{{ $empleado->ApellidoP ?? '' }}" class="form-control" id="ApellidoP">-->
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">

                        {!! Form::label('ApellidoM', 'Apellido Materno') !!}
                        {!! Form::text('ApellidoM', null, ['class' => 'form-control'])  !!}

                        <!--<label for="ApellidoM">Apellido Materno</label>
                        <input type="text" name="ApellidoM" value="{{ $empleado->ApellidoM ?? '' }}" class="form-control" id="ApellidoM">-->
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        {!! Form::label('Telefono', 'Telefono:') !!}
                        {!! Form::text('Telefono', null, ['class' => 'form-control'])  !!}
                    </div>
                </div>

                <div class="col-md-8">
                    <div class="form-group">
                        {!! Form::label('Correo', 'Correo:') !!}
                        {!! Form::email('Correo', null, ['class' => 'form-control'])  !!}
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('Puesto', 'Puesto:') !!}
                        {!! Form::select('Puesto', [
                            'Vendedor' => 'Vendedor', 
                            'Cajero' => 'Cajero', 
                            'Jefe de Area' => 'Jefe Area', 
                            'Subgerente' => 'Subgerente',
                        ], null, 
                        ['placeholder' => 'Selecciona una opcion...']) !!}
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('Turno', 'Turno:') !!}
                        {!! Form::select('Turno', [
                            'Matutino' => 'Matutino', 
                            'Vespertino' => 'Vespertino', 
                        ], null, 
                        ['placeholder' => 'Selecciona una opcion...']) !!}
                    </div>
                </div>

                <div class="col-md-12">
                    <button type="submit" class="btn btn-danger btn-block">Enviar</button>
                </div>

                </form>
        </div>
    </div>
</div>
@endsection