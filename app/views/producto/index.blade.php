<!--Heredar el diseño de la plantilla-->
@extends('layouts.template')

@section('title', 'Productos')

@section('content')
    <div class="container">

        <div class="row">
            <div class="col-12">
                <a href="{{URL.'producto/detail/'}}" class="btn btn-primary btn-block" is-modal="true" id="nuevo">NUEVO <i class="fa fa-plus"></i></a>
            </div>
        </div>
        <br>
        <table class="table table-hover">
        <thead>
            <tr>
                <th style="width: 5%">ID</th>
                <th style="width: 30%">NOMBRE</th>
                <th style="width: 10%">P. VENTA</th>
                <th style="width: 10%">P. COSTO</th>
                <th style="width: 10%">STOCK</th>
                <th style="width: 10%">CATEGORIA</th>
                <th style="width: 10%">MARCA</th>
                <th style="width: 15%"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>{{$item->idproducto}}</td>
                    <td>{{$item->nombre}}</td>
                    <td>{{$item->precioventa}}</td>
                    <td>{{$item->preciocosto}}</td>
                    <td>{{$item->stock}}</td>
                    <td>{{$item->categoria}}</td>
                    <td>{{$item->marca}}</td>
                    <td>
                        <a is-modal="true" href='{{URL."producto/detail/{$item->idproducto}/{$item->idcategoria}/{$item->idmarca}"}}' class="btn btn-success"><i class="fa fa-pencil"></i></a>
                        <a href='{{URL."producto/delete/{$item->idproducto}"}}' class="btn btn-danger" onclick="return confirm('¿ Está seguro de eliminar: {{$item->nombre}} ?')"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>

    @component('layouts.components.modal')
        @slot('title', 'Productos - Detalle')
        @slot('size', MODAL_GRANDE)
    @endcomponent
@endsection

@section('scripts')
    <script src="{{URL}}js/mis_scripts/modal_crud.js"></script>
@endsection