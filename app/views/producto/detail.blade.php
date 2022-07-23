{{--@extends('layouts.template')--}}

{{--@section('title', 'Productos')--}}

{{--@section('content')--}}
    <div class="container">
        <form action="{{URL.'producto/save'}}" method="POST" id="myForm">
            <div class="form-group" hidden>
                <input type="hidden" name="idproducto" value="{{$data->idproducto}}">
            </div>
            
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="">Nombre</label>
                        <input type="text" name="nombre" id="nombre" value="{{$data->nombre}}">
                        <div class="messages"></div>
                    </div>
                    <div class="form-group">
                        <label for="">Descripción</label>
                        <input type="text" name="descripcion" id="descripcion" value="{{$data->descripcion}}">
                        <div class="messages"></div>
                    </div>
                    <div class="form-group">
                        <label for="">Marca</label>
                        <select name="idmarca">
                            @foreach ($marcas as $item)
                                <option value="{{$item->idmarca}}" {{selected($item->idmarca, $idmarca)}}>
                                    {{$item->nombre}}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
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
                        <input type="number" step="0.1" name="preciocosto" id="preciocosto" value="{{$data->preciocosto}}">
                        <div class="messages"></div>
                    </div>
                    <div class="form-group">
                        <label for="">Precio Venta</label>
                        <input type="number" step="0.1" name="precioventa" id="precioventa" value="{{$data->precioventa}}">
                        <div class="messages"></div>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="">Stock</label>
                        <input type="number" step="0.1" name="stock" id="stock" value="{{$data->stock}}">
                        <div class="messages"></div>
                    </div>
                    <div class="form-group">
                        <label for="">Stock Minimo</label>
                        <input type="number" step="0.1" name="stockminimo" id="stockminimo" value="{{$data->stockminimo}}">
                        <div class="messages"></div>
                    </div>
                    <div class="form-group">
                        <label for="">Estado</label>
                        <input type="checkbox" name="estado" id="estado" {{checked($data->estado)}}>
                        <div class="messages"></div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-right">
                <div class="col modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">CANCELAR <i class="fa fa-close"></i></button>
                    <button type="submit" class="btn btn-primary">GUARDAR <i class="fa fa-check"></i></button>
                </div>
            </div>
        </form>
    </div>
{{--{@endsection}--}}

<script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js"></script>
<script src="{{URL}}js/mis_scripts/validate.js"></script>
<script src="{{URL}}js/mis_scripts/show_errors_validations.js"></script>
<script src="{{URL}}js/mis_scripts/producto.js"></script>