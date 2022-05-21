@extends('layouts.template')

@section('title','Inicio')

@section('mis_estilos')
    <link href="<?= URL . 'css/cover.css'?>" rel="stylesheet">
@endsection

@section('content')
<section class="content">
    <h1>Página de Inicio</h1>
    <p class="lead">Cover is a one-page template for building simple and beautiful home pages. Download, edit the text, and add your own fullscreen background photo to make it your own.</p>
    <p class="lead">
        <a href="#" class="btn btn-lg btn-secondary fw-bold border-white bg-white">Learn more</a>
    </p>
    <p>{{$name}}</p>
</section>

@endsection

@section('mis_scripts')
    <script src="<?= URL . 'js/pruebas.js'?>"></script>
@endsection
