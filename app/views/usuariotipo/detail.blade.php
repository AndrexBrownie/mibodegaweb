@extends('layouts.template')

@section('title', 'Tipos de Usuario')

@section('content')
    <div class="container">
        <form action="{{URL.'usuariotipo/save'}}" method="POST">
            <input type="hidden" name="idtipo" value="{{$data->idtipo}}">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="">Nombre</label>
                        <input type="text" name="nombre" id="nombre" value="{{$data->nombre}}">
                    </div>
                    <div class="row">
                        <div class="col form-group">
                            <a href="{{URL.'usuariotipo/'}}" class="btn btn-danger form-control">CANCELAR <i class="fa fa-close"></i></a>
                        </div>
                        <div class="col form-group">
                            <button type="submit" class="btn btn-primary form-control">GUARDAR <i class="fa fa-check"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
