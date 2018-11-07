
<body>
    <div class="container">
        <h1>Formulario Cita</h1>
        <form class="form-horizontal" id="Addsede">
            <div class="form-group">
                <label class="control-label col-sm-2" for="idDire">TIPO DE SEGURO:</label>
                <div class="col-sm-4">
                    <select class="form-control" name="ctSeguro" id="ctSeguro">
                        <option value="0">Seleccione...</option>
                        <option value="SEMESTRAL">SEMESTRAL</option>
                        <option value="ANUAL">ANUAL</option>
                        <option value="2AÑOS">2 AÑOS</option>
                    </select>
                </div>
            
                <label class="control-label col-sm-2" for="idDire">SEGUROS:</label>
                <div class="col-sm-4">
                    <select class="form-control" name="cSeguro" id="cSeguro">
                        <option value="0">Seleccione...</option>
                        <option value="BRONZE">BRONZE</option>
                        <option value="SILVER">SILVER</option>
                        <option value="GOLD">GOLD</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="iSede">SEDE ID:</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="iSede" name="iSede" >
                </div>

                <label class="control-label col-sm-2" for="DiSede">NOMBRE SEDE:</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="DiSede" name="DiSede" >
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="Nclinica">NOMBRE CLINICA:</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="Nclinica" name="Nclinica" >
                </div>
                <label class="control-label col-sm-2" for="persona">PERSONA:</label>
                <div class="col-sm-4">
                    <select  name="persona"  id="persona" class="form-control">
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="Ncita">CITA:</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="Ncita" name="Ncita" >
                </div>

                <label class="control-label col-sm-2" for="Nusuario">USUARIO:</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="Nusuario" name="Nusuario" >
                </div>
            </div>
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
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Guardar</button>
                </div>
            </div>
        </form>
    </div>
</body>
<script>
$(document).ready(function()
      {
        $("#dtBox").DateTimePicker();
      });
    addCita('#Addsede');
    Cpersona('php/Cpersona.php',"#persona");
</script>

