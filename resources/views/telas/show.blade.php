@extends('layouts.base')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card-header"> Tela </div>

            <div class="card-body">

                <h3>{{ $tela->nombre_tela }}</h3>

                <ul>
                    @foreach($tela->venta as $venta)
                        <li>{{ $venta->fecha }}</li>
                    @endforeach
                </ul>
                
            </div>


            
        </div>
    </div>
</div>
@endsection