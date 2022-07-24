<!--Heredar el diseño de la plantilla-->
@extends('layouts.template')

@section('title', 'Categorias')

@section('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.19/dist/sweetalert2.min.css">
@endsection

@section('content')
    <div class="container">

        <div class="row">
            <div class="col-12">
                <a href="{{URL.'categoria/detail/'}}" class="btn btn-primary btn-block" is-modal="true" id="nuevo">NUEVO <i class="fa fa-plus"></i></a>
            </div>
        </div>
        <br>
        <table class="table table-hover">
        <thead>
            <tr>
                <th style="width: 15%">ID</th>
                <th style="width: 35%">NOMBRE</th>
                <th style="width: 30%">DESCRIPCIÓN</th>
                <th style="width: 15%"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>{{$item->idcategoria}}</td>
                    <td>{{$item->nombre}}</td>
                    <td>{{$item->descripcion}}</td>
                    <td>
                        <a is-modal="true" href='{{URL."categoria/detail/{$item->idcategoria}"}}' class="btn btn-success"><i class="fa fa-pencil"></i></a>
                        <button my-name="{{$item->nombre}}" my-action='{{URL."categoria/delete/{$item->idcategoria}"}}' class="btn btn-danger" onclick="remove(this)"><i class="fa fa-trash"></i></button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>

    @component('layouts.components.modal')
        @slot('title', 'Categorias - Detalle')
        @slot('size', MODAL_NORMAL)
    @endcomponent
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.19/dist/sweetalert2.min.js"></script>
    <script src="{{URL}}js/mis_scripts/modal_crud.js"></script>
@endsection
