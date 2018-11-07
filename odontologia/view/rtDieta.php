<?php
$host= $_SERVER["HTTP_HOST"];
$url= $_SERVER["REQUEST_URI"];
//echo "http://" . $host . $url;
?>
<script src="include/js/datatables/Rdieta.js"></script>
<script src="include/js/comandos.js"></script>

<body>
<div class="toolbar">
</div>
    <div class="container">
        <table class="table  table-hover table-striped table-bordered" id="Rdieta" style="width:100%">
            <thead>
                <th>ID DIETA</th>
                <th>CITA</th>
                <th>NOMBRE MEDICO</th>
                <th>DIAGNOSTICO</th>
                <th>CONTROLES</th>
            </thead>
        </table>
    </div>
    
<form  id="Ecita">

    <div id="modalEditar" class="modal fade" role="dialog">
    <div class="modal-dialog">  
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Edición de Citas</h4>
        </div>
        <div class="modal-body">
            <form class="form-horizontal" >
            <input type="hidden" class="form-control" id="idcita" name="idcita" value="">
            <div class="form-group">
                <label class="control-label col-sm-2" for="Fcita">FECHA CITA:</label>
                <div class="col-sm-4">
                    <input type="text" data-field="date" class="form-control" id="Fcita" name="Fcita" >
                </div>
                    <div id="dtBox"></div>
                <label class="control-label col-sm-2" for="Hhora">HORA CITA:</label>
                <div class="col-sm-4">
                    <input type="text" data-field="time" class="form-control" id="Hhora" name="Hhora" >
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

<form  id="Dcita">
    <div id="modalEliminar" class="modal fade" role="dialog">
    <div class="modal-dialog">  
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Elininar Alimento</h4>
        </div>
        <div class="modal-body">
            <form class="form-horizontal">
            <input type="hidden" name="iddcita" id="iddcita" value="">
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
    //editarCita('#Ecita','view/rtCita.php','#modalEditar');
    //eliminarCita('#Dcita','view/rtCita.php','#modalEliminar');
    //$("#dtBox").DateTimePicker();
})

</script>
</body>

