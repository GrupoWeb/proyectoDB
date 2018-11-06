<?php
$host= $_SERVER["HTTP_HOST"];
$url= $_SERVER["REQUEST_URI"];
//echo "http://" . $host . $url;
?>
<script src="include/js/datatables/Rmedico.js"></script>
<script src="include/js/comandos.js"></script>

<body>
<div class="toolbar">
</div>
    <div class="container">
        <table class="table  table-hover table-striped table-bordered" id="Rmedico" style="width:70%">
            <thead>
                <th>Codigo</th>
                <th>Medico</th>
                <th>Especialidad</th>
                <th>Registro</th>
                <th>Controles</th>
            </thead>
        </table>
    </div>
    
<form  id="Uespecialidad">

    <div id="modalEditar" class="modal fade" role="dialog">
    <div class="modal-dialog">  
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Edición de Especialidad</h4>
        </div>
        <div class="modal-body">
            <form class="form-horizontal" >
            <input type="hidden" class="form-control" id="idespe" name="idespe" value="">
                <div class="form-group">
                    <label class="control-label col-sm-2" for="especialidad">Especialidad:</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="especialidad" name="especialidad" >
                    </div>
                </div>
            </form>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-default"  >Editar</button>
        </div>
        </div>
    </div>
    </div>
</form>

<form  id="Despecialidad">
    <div id="modalEliminar" class="modal fade" role="dialog">
    <div class="modal-dialog">  
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Elininar Especialidad</h4>
        </div>
        <div class="modal-body">
            <form class="form-horizontal">
            <input type="hidden" name="idespecialidad" id="idespecialidad" value="">
                <div class="form-group">
                    ¿Está seguro de eliminar el alimento?
                </div>
            </form>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-default" >Aceptar</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        </div>
        </div>
    </div>
    </div>
</form>
<script>
$(document).ready(function(){
    editarAlimento('#Ealimento','view/Ralimento.php','#modalEditar');
    eliminarAlimento('#Dalimento','view/Ralimento.php','#modalEliminar');
})

</script>
</body>

