<!--Heredar el diseño de la plantilla-->
@extends('layouts.template')

@section('title', 'Usuarios')

@section('content')
    <div class="container">

        <div class="row">
            <div class="col-12">
                <a href="{{URL.'usuario/detail/'}}" class="btn btn-primary btn-block">NUEVO <i class="fa fa-plus"></i></a>
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
                        <a href='{{URL."usuario/detail/{$item->idusuario}/{$item->idtipo}"}}' class="btn btn-success"><i class="fa fa-pencil"></i></a>
                        <a href='{{URL."usuario/delete/{$item->idusuario}"}}' class="btn btn-danger" onclick="return confirm('¿ Está seguro de eliminar: {{$item->usuario}} ?')"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>
@endsection
