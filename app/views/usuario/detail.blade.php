
    <div class="container">
        <form action="{{URL.'usuario/save'}}" method="POST" id="myForm">
            <div class="form-group" hidden>
                <input type="hidden" name="idusuario" value="{{$data->idusuario}}">
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="">Usuario</label>
                        <input type="text" name="usuario" id="usuario" value="{{$data->usuario}}">
                        <div class="messages"></div>
                    </div>
                    <div class="form-group">
                        <label for="">Tipo</label>
                        <select name="idtipo">
                            @foreach ($usuariostipo as $item)
                                <option value="{{$item->idtipo}}" {{selected($item->idtipo, $idtipo)}}>
                                    {{$item->nombre}}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col">
                    
                    <div class="form-group">
                        <label for="">Clave</label>
                        <input type="password" name="clave" id="clave" value="{{$data->clave}}">
                        <div class="messages"></div>
                    </div>
                    <div class="form-group">
                        <label for="">Correo</label>
                        <input type="text" name="correo" id="correo" value="{{$data->correo}}">
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
<script src="{{URL}}js/mis_scripts/usuario.js"></script>