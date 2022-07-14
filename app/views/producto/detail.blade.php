@extends('layouts.template')

@section('title', 'Productos')

@section('content')
    <div class="container">
        <form action="{{URL.'producto/save'}}" method="POST">
            <input type="hidden" name="idproducto" value="{{$data->idproducto}}">
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
                    <div class="for-group">
                        <label for="">Marca</label>
                        <select name="idmarca">
                            @foreach ($marcas as $item)
                                <option value="{{$item->idmarca}}" {{selected($item->idmarca, $idmarca)}}>
                                    {{$item->nombre}}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="for-group">
                        <label for="">Categoria</label>
                        <select name="idcategoria">
                            @foreach ($categorias as $item)
                                <option value="{{$item->idcategoria}}" {{selected($item->idcategoria, $idcategoria)}}>
                                    {{$item->nombre}}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Precio Costo</label>
                        <input type="number" step="0.1" name="preciocosto" value="{{$data->preciocosto}}">
                    </div>
                    <div class="form-group">
                        <label for="">Precio Venta</label>
                        <input type="number" step="0.1" name="precioventa" value="{{$data->precioventa}}">
                    </div>
                    <div class="form-group">
                        <label for="">Stock</label>
                        <input type="number" step="0.1" name="stock" value="{{$data->stock}}">
                    </div>
                    <div class="form-group">
                        <label for="">Stock Minimo</label>
                        <input type="number" step="0.1" name="stockminimo" value="{{$data->stockminimo}}">
                    </div>
                    <div class="form-group">
                        <label for="">Estado</label>
                        <input type="checkbox" name="estado" {{checked($data->estado)}}>
                    </div>
                    <div class="row">
                        <div class="col form-group">
                            <a href="{{URL.'producto/'}}" class="btn btn-danger form-control">CANCELAR <i class="fa fa-close"></i></a>
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
