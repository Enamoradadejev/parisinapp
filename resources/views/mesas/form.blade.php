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

                    @if(isset($mesa))
                        {!! Form::model($mesa, ['route' => ['mesas.update', $mesa->id], 'method' => 'PATCH']) !!}
                    @else
                        {!! Form::open(['route' => 'mesas.store']) !!}
                    @endif
                    
                      @csrf             
                      <div class="form-group">
                        {!! Form::label('numero_mesa', 'Numero de mesa:') !!}                        
                        {!! Form::text('numero_mesa', null, ['class' => 'form-control'])  !!}
                      </div>

                      
                      <div class="form-group">
                        {!! Form::label('area', 'Area:') !!}                        
                        {!! Form::select('area', [
                            'Vestir' => 'Vestir', 
                            'Merceria' => 'Merceria', 
                            'Cortinas' => 'Cortinas', 
                            'Blancos' => 'Blancos',
                        ], null, 
                        ['placeholder' => 'Selecciona una opcion...']) !!}
                      </div>

                      <div class="form-group">
                        {!! Form::label('enfoque', 'Enfoque:') !!}
                        {!! Form::select('enfoque', [
                            'Cortinas' => 'Cortinas',
                            'Escolar' => 'Escolar', 
                            'Forros' => 'Forros', 
                            'Ofertas' => 'Ofertas', 
                            'Plasticos' => 'Plasticos',
                            'Polar' => 'Polar',
                        ], null, 
                        ['placeholder' => 'Selecciona una opcion...']) !!}

                      </div>


                      <button type="submit" class="btn btn-primary">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection