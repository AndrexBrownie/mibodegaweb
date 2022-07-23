
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
                </div>
                <div class="col">
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
                    <div class="form-group">
                        <label for="">Correo</label>
                        <input type="email" name="correo" value="{{$data->correo}}">
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

