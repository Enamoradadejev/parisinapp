@extends('layouts.plantilla')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        {{Auth::user()->name.' - '.Auth::user()->email}}
        </div>
    </div>
</div>
@endsection
