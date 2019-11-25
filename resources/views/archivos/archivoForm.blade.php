@extends('layouts.base')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">

                {!! Form::open(['route' => 'archivo.upload','file' => true]) !!}
                
                <div class="col-md-12">
                    <div class="form-group">

                        {!! Form::label('archivo', 'Carga de Archivo:') !!}
                        {!! Form::file('archivo')  !!}

                    </div>
                </div>

                <div class="col-md-12">
                    <button type="submit" class="btn btn-danger btn-block">Enviar</button>
                </div>


                {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection