@extends('layouts.template')

@section('title', 'Categorias')

@section('content')
    <div class="container">
        <form action="{{URL.'categoria/save'}}" method="POST">
            <input type="hidden" name="idcategoria" value="{{$data->idcategoria}}">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="">Nombre</label>
                        <input type="text" name="nombre" id="nombre" value="{{$data->nombre}}">
                    </div>
                    <div class="form-group">
                        <label for="">Descripción</label>
                        <input type="text" name="descripcion" id="descripcion" value="{{$data->descripcion}}">
                    </div>
                    <div class="row">
                        <div class="col form-group">
                            <a href="{{URL.'categoria/'}}" class="btn btn-danger form-control">CANCELAR <i class="fa fa-close"></i></a>
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
