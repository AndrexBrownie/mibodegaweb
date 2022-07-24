
    <div class="container">
        <form action="{{URL.'permiso/save'}}" method="POST" id="myForm">
            <div class="form-group" hidden>
                <input type="hidden" name="idpermiso" value="{{$data->idpermiso}}">
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="">Tablas</label>
                        <input type="number" name="tablas" id="tablas" value="{{$data->tablas}}">
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
<script src="{{URL}}js/mis_scripts/permiso.js"></script>