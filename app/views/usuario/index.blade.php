<!--Heredar el diseño de la plantilla-->
@extends('layouts.template')

@section('title', 'Usuarios')

@section('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.19/dist/sweetalert2.min.css">
@endsection

@section('content')
    <div class="container">

        <div class="row">
            <div class="col-12">
                <a href="{{URL.'usuario/detail/'}}" class="btn btn-primary btn-block" is-modal="true" id="nuevo">NUEVO <i class="fa fa-plus"></i></a>
            </div>
        </div>
        <br>
        <table class="table table-hover">
        <thead>
            <tr>
                <th style="width: 10%">ID</th>
                <th style="width: 20%">USUARIO</th>
                <th style="width: 20%">CLAVE</th>
                <th style="width: 20%">CORREO</th>
                <th style="width: 15%">TIPO</th>
                <th style="width: 15%"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>{{$item->idusuario}}</td>
                    <td>{{$item->usuario}}</td>
                    <td>{{$item->clave}}</td>
                    <td>{{$item->correo}}</td>
                    <td>{{$item->usuariotipo}}</td>
                    <td>
                        <a is-modal="true" href='{{URL."usuario/detail/{$item->idusuario}/{$item->idtipo}"}}' class="btn btn-success"><i class="fa fa-pencil"></i></a>
                        <button my-name="{{$item->usuario}}" my-action='{{URL."usuario/delete/{$item->idusuario}"}}' class="btn btn-danger" onclick="remove(this)"><i class="fa fa-trash"></i></button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>

    @component('layouts.components.modal')
        @slot('title', 'Usuarios - Detalle')
        @slot('size', MODAL_GRANDE)
    @endcomponent
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.19/dist/sweetalert2.min.js"></script>
    <script src="{{URL}}/js/mis_scripts/modal_crud.js"></script>
@endsection
