
<div class="container">
    <form action="{{URL.'cliente/save'}}" method="POST" id="myForm">
        <div class="form-group" hidden>
            <input type="hidden" name="idcliente" value="{{$data->idcliente}}">
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="nombres">Nombres</label>
                    <input type="text" name="nombres" id="nombres" value="{{$data->nombres}}">
                    <div class="messages"></div>
                </div>
                <div class="form-group">
                    <label for="apellidos">Apellidos</label>
                    <input type="text" name="apellidos" id="apellidos" value="{{$data->apellidos}}">
                    <div class="messages"></div>
                </div>
                <div class="form-group">
                    <label for="">Usuario</label>
                        <select name="idusuario">
                            @foreach ($usuarios as $item)
                                <option value="{{$item->idusuario}}" {{selected($item->idusuario, $idusuario)}}>
                                    {{$item->usuario}}
                                </option>
                            @endforeach
                        </select>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="direccion">Dirección</label>
                    <input type="text" name="direccion" value="{{$data->direccion}}">
                    <div class="messages"></div>
                </div>
                <div class="form-group">
                    <label for="ubicacion">Ubicación</label>
                    <input type="text" name="ubicacion" value="{{$data->ubicacion}}">
                    <div class="messages"></div>
                </div>
                <div class="form-group">
                    <label for="telefono">Telefono</label>
                    <input type="number" step="1" name="telefono" value="{{$data->telefono}}">
                    <div class="messages"></div>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="dni">DNI</label>
                    <input type="number" step="1" name="dni" value="{{$data->dni}}">
                    <div class="messages"></div>
                </div>
                <div class="form-group">
                    <label for="nacimiento">Fecha de Nacimiento</label>
                    <input type="date" name="nacimiento" value="{{$data->nacimiento}}">
                    <div class="messages"></div>
                </div>
                <div class="form-group">
                    <label class="form-check" for="sexo">Sexo</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="sexo" id="masculino" value="masculino" {{($data->sexo == "masculino" ? "checked" : "")}} checked>
                        <label class="form-check-label" for="masculino">Masculino</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="sexo" id="femenino" value="femenino" {{($data->sexo == "femenino" ? "checked" : "")}}>
                        <label class="form-check-label" for="femenino">Femenino</label>
                    </div>
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js"></script>
<script src="{{URL}}js/mis_scripts/validate.js"></script>
<script src="{{URL}}js/mis_scripts/show_errors_validations.js"></script>
<script src="{{URL}}js/mis_scripts/cliente.js"></script>