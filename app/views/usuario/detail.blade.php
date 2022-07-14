@extends('layouts.template')

@section('title', 'Usuarios')

@section('content')
    <div class="container">
        <form action="{{URL.'usuario/save'}}" method="POST">
            <input type="hidden" name="idusuario" value="{{$data->idusuario}}">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="">Usuario</label>
                        <input type="text" name="usuario" id="usuario" value="{{$data->usuario}}">
                    </div>
                    <div class="form-group">
                        <label for="">Clave</label>
                        <input type="text" name="clave" id="clave" value="{{$data->clave}}">
                    </div>
                    <div class="for-group">
                        <label for="">Tipo</label>
                        <select name="idtipo">
                            @foreach ($usuariostipo as $item)
                                <option value="{{$item->idtipo}}" {{selected($item->idtipo, $idtipo)}}>
                                    {{$item->nombre}}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Correo</label>
                        <input type="email" name="correo" value="{{$data->correo}}">
                    </div>
                    
                    
                    <div class="row">
                        <div class="col form-group">
                            <a href="{{URL.'usuario/'}}" class="btn btn-danger form-control">CANCELAR <i class="fa fa-close"></i></a>
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
