@extends('layouts.layout')


@section('contenido')
    


    <div class="container">
    <div class="">

        @auth
            @if (auth()->user()->hasRoles(Array('admin')))
            <descuento-component></descuento-component>
            @endif   
        @endauth

        <card-component></card-component>
    </div>

    </div>
@endsection
 