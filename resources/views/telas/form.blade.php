@extends('layouts.base')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card-header"> Tela </div>

            <div class="card-body">

                @if(isset($tela))
                    {!! Form::model($tela, ['route' => ['telas.update', $tela->id], 'method' => 'PATCH']) !!}
                @else
                    {!! Form::open(['route' => telas.store']) !!}
                @endif
                
                @csrf

                <div class="col-md-12">
                    <div class="form-group">
                        {!! Form::label('nombre_tela', 'Nombre Tela:') !!}
                        {!! Form::text('nombre_tela', null, ['class' => 'form-control'])  !!}
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('venta_id', 'Venta: ') !!}
                        <!--{!! Form::text('venta_id', $ventas, null, ['class' => 'form-control'])  !!}
                        {!! Form::text('venta_id[]', $ventas, null, ['class' => 'form-control' , 'multiple'])  !!}-->endforeach

                        <!-- MOSTRAR LOS YA SELECCIONADOS -->
                        {!! Form::text('venta_id[]', $ventas, $seleccionados ?? null, ['class' => 'form-control' , 'multiple'])  !!}
                    </div>
                </div>

                <div class="col-md-12">
                    <button type="submit" class="btn btn-danger btn-block">Enviar</button>
                </div>
                
            </div>



        </div>
    </div>
</div>
@endsection