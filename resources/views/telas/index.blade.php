@extends('layouts.base')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card-header"> Tela </div>

            <div class="card-body">

            <table class="table">
                <tr>
                    <th>Tela</th>
                    <th>Ventas</th>
                </tr>

                @foreach($telas as $tela)
                <tr>
                    <td>{{ $tela->nombre_tela }}</td>
                    <td>
                        <ul>
                        <!-- WITH CONTROLADOR ventas -->
                        @foreach($tela->ventas as $venta)
                            <li>{{ $venta->id}}</li>
                        @endforeach
                        </ul>
                    </td>
                </tr>
                @endforeach
            </table>
                
            </div>


            
        </div>
    </div>
</div>
@endsection