
    <div class="container">
        <form action="{{URL.'usuariotipo/save'}}" method="POST" id="myForm">
            <div class="form-group" hidden>
                <input type="hidden" name="idtipo" value="{{$data->idtipo}}">
            </div>

            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="">Nombre</label>
                        <input type="text" name="nombre" id="nombre" value="{{$data->nombre}}">
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
<script src="{{URL}}js/mis_scripts/usuariotipo.js"></script>
