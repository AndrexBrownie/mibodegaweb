<!--Heredar el diseño de la plantilla-->
@extends('layouts.template')

@section('title', 'Clientes')

@section('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.19/dist/sweetalert2.min.css">
@endsection

@section('content')
    <div class="container">

        <div class="row">
            <div class="col-12">
                <a href="{{URL.'client/detail/'}}" class="btn btn-primary btn-block" is-modal="true" id="nuevo">NUEVO <i class="fa fa-plus"></i></a>
            </div>
        </div>
        <br>
        <table class="table table-hover">
        <thead>
            <tr>
                <th style="width: 5%">ID</th>
                <th style="width: 15%">NOMBRES</th>
                <th style="width: 15%">APELLIDOS</th>
                <th style="width: 10%">TELF.</th>
                <th style="width: 10%">DOCUMENTO</th>
                <th style="width: 10%">TIPO</th>
                <th style="width: 10%"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>{{$item->idcliente}}</td>
                    <td>{{$item->nombres}}</td>
                    <td>{{$item->apellidos}}</td>
                    <td>{{$item->telefono}}</td>
                    <td>{{$item->documento}}</td>
                    <td>{{$item->tipo}}</td>
                    <td>
                        <a is-modal="true" href='{{URL."client/detail/{$item->idcliente}/{$item->idtipo}"}}' class="btn btn-success"><i class="fa fa-pencil"></i></a>
                        <button my-name="{{$item->nombres}}"" my-action='{{URL."cliente/delete/{$item->idcliente}"}}' class="btn btn-danger" onclick="remove(this)"><i class="fa fa-trash"></i></button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>

    @component('layouts.components.modal')
        @slot('title', 'Clientes - Detalle')
        @slot('size', MODAL_GRANDE)
    @endcomponent
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.19/dist/sweetalert2.min.js"></script>
    <script src="{{URL}}js/mis_scripts/modal_crud.js"></script>
@endsection
