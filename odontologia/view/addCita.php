
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
                    <select class="form-control" name="iSede" id="iSede">
                        <option value="0">Seleccione...</option>
                        <option value="1">Zona 1</option>
                        <option value="2">Zona 2</option>
                        <option value="3">Zona 3</option>
                        <option value="4">Zona 4</option>
                        <option value="5">Zona 5</option>
                        <option value="6">Zona 6</option>
                        <option value="7">Zona 7</option>
                        <option value="8">Zona 8</option>
                        <option value="9">Zona 9</option>
                        <option value="10">Zona 10</option>
                        <option value="11">Zona 11</option>
                        <option value="12">Zona 12</option>
                        <option value="13">Zona 13</option>
                        <option value="14">Zona 14</option>
                        <option value="15">Zona 15</option>
                        <option value="16">Zona 16</option>
                        <option value="17">Zona 17</option>
                        <option value="18">Zona 18</option>
                        <option value="21">Zona 21</option>
                        <option value="24">Zona 24</option>
                        <option value="25">Zona 25</option>
                    </select>
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

