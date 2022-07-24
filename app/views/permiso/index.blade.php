<!--Heredar el diseño de la plantilla-->
@extends('layouts.template')

@section('title', 'Permisos')

@section('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.19/dist/sweetalert2.min.css">
@endsection

@section('content')
    <div class="container">

        <div class="row">
            <div class="col-12">
                <a href="{{URL.'permiso/detail/'}}" class="btn btn-primary btn-block" is-modal="true" id="nuevo">NUEVO <i class="fa fa-plus"></i></a>
            </div>
        </div>
        <br>
        <table class="table table-hover">
        <thead>
            <tr>
                <th style="width: 15%">ID</th>
                <th style="width: 40%">TABLAS</th>
                <th style="width: 30%">TIPO</th>
                <th style="width: 15%"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>{{$item->idpermiso}}</td>
                    <td>{{$item->tablas}}</td>
                    <td>{{$item->usuariotipo}}</td>
                    <td>
                        <a is-modal="true" href='{{URL."permiso/detail/{$item->idpermiso}/{$item->idtipo}"}}' class="btn btn-success"><i class="fa fa-pencil"></i></a>
                        <button my-name="{{$item->tablas}}" my-action='{{URL."permiso/delete/{$item->idpermiso}"}}' class="btn btn-danger" onclick="remove(this)"><i class="fa fa-trash"></i></button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>

    @component('layouts.components.modal')
        @slot('title', 'Permisos - Detalle')
        @slot('size', MODAL_CHICO)
    @endcomponent
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.19/dist/sweetalert2.min.js"></script>
    <script src="{{URL}}/js/mis_scripts/modal_crud.js"></script>
@endsection
