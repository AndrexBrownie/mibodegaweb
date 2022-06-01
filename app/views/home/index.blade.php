<!--Heredar el diseño de la plantilla-->
@extends('layouts.template')

@section('title', 'Inicio')
@section('content')
    @component('layouts.components.alert')
        @slot('title', 'Advertencia')
        @slot('color','primary')
        Esta es una alerta roja
    @endcomponent
    @component('layouts.components.alert')
        @slot('title', 'Aviso')
        @slot('color','success')
        Esta es una alerta verde
    @endcomponent
    @include('layouts.partials.static_banner')
@endsection
