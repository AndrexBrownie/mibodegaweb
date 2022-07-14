<!--Heredar el diseño de la plantilla-->
@extends('layouts.template')

@section('title', 'Marcas')

@section('content')
    <div class="container">

        <div class="row">
            <div class="col-12">
                <a href="{{URL.'marca/detail/'}}" class="btn btn-primary btn-block">NUEVO <i class="fa fa-plus"></i></a>
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
                    <td>{{$item->idmarca}}</td>
                    <td>{{$item->nombre}}</td>
                    <td>{{$item->descripcion}}</td>
                    <td>
                        <a href='{{URL."marca/detail/{$item->idmarca}"}}' class="btn btn-success"><i class="fa fa-pencil"></i></a>
                        <a href='{{URL."marca/delete/{$item->idmarca}"}}' class="btn btn-danger" onclick="return confirm('¿ Está seguro de eliminar: {{$item->nombre}} ?')"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>
@endsection
