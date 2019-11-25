@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                    @if(isset($venta))
                        {!! Form::model($venta, ['route' => ['ventas.update', $venta->id], 'method' => 'PATCH']) !!}
                    @else
                        {!! Form::open(['route' => 'ventas.store']) !!}
                    @endif
                    
                      @csrf
                      
                      <div class="form-group">

                        {!! Form::label('id', 'Folio: ') !!}
                        
                          <!--<label for="Nombre">Nombre</label>
                          <input type="text" name="Nombre" value="{{ $venta->Nombre ?? '' }}" class="form-control" id="Nombre">-->
                      </div>
                      
                      <div class="form-group">

                        {!! Form::label('fecha', 'Fecha:') !!}
                        {!! Form::date('fecha', \Carbon\Carbon::now(), null, ['class' => 'form-control'])  !!}               

                        <!--<label for="Nombre">Nombre</label>
                        <input type="text" name="Nombre" value="{{ $venta->Nombre ?? '' }}" class="form-control" id="Nombre">-->
                      </div>

                      <div class="form-group">

                        <!-- ESTA FORMA SI QUEREMOS USAR pluck
                        {!! Form::label('empleado_id', 'Empleado:') !!}
                        {!! Form::select('empleado_id', $empleados, null, ['class' => 'form-control']) !!}
                        {!! Form::select('Nombre', $empleados, null, ['class' => 'form-control'])  !!}-->

                        <!-- ESTA FORMA SI QUEREMOS all() -->
                        <select name="empleado_id" class="form-control">
                            @foreach($empleados as $empleado)
                                <option value="{{ $empleado->id }}"> {{ $empleado->Nombre . ' ' . $empleado->ApellidoP . ' ' . $empleado->ApellidoM}} </option>
                            @endforeach
                        </select>

                      </div>

                      <button type="submit" class="btn btn-primary">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection