
<div class="container">
    <form action="{{URL.'client/save'}}" method="POST" id="myForm">
        <div class="form-group" hidden>
            <input type="hidden" name="idcliente" value="{{$data->idcliente}}">
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="">Tipo</label>
                        <select name="idclienttipo">
                            @foreach ($clienttipo as $item)
                                <option value="{{$item->idclienttipo}}" {{selected($item->idclienttipo, $idclienttipo)}}>
                                    {{$item->nombre}}
                                </option>
                            @endforeach
                        </select>
                </div>
                <div class="form-group">
                    <label for="nombres">Nombres</label>
                    <input type="text" name="nombres" id="nombres" value="{{$data->nombres}}">
                    <div class="messages"></div>
                </div>
                <div class="form-group">
                    <label for="nacimiento">Fecha de Nacimiento</label>
                    <input type="date" name="nacimiento" id="nacimiento" value="{{$data->nacimiento}}">
                    <div class="messages"></div>
                </div>
            </div>
            
            <div class="col">
                <div class="form-group">
                    <label for="documento">Documento</label>
                    <input type="text" id="documento" name="documento" value="{{$data->documento}}">
                    <div class="messages"></div>
                </div>
                
                <div class="form-group">
                    <label for="apellidos">Apellidos</label>
                    <input type="text" name="apellidos" id="apellidos"  value="{{$data->apellidos}}">
                    <div class="messages"></div>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <button id="btnbuscar" style="margin-top: 33px" class="btn btn-success col-12" onclick="getdocumento(event);">Buscar</button>
                </div>
                <div class="form-group">
                    <label for="telefono">Telefono</label>
                    <input type="text" name="telefono" id="telefono" value="{{$data->telefono}}">
                    <div class="messages"></div>
                </div>
                <div class="form-group">
                    <label for="email">Correo</label>
                    <input type="text" name="email" id="email" value="{{$data->email}}">
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js"></script>
<script src="{{URL}}js/mis_scripts/validate.js"></script>
<script src="{{URL}}js/mis_scripts/show_errors_validations.js"></script>
<script src="{{URL}}js/mis_scripts/cliente.js"></script>
<script src="{{URL}}js/mis_scripts/peticiones.js"></script>