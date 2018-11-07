
<body>
    <div class="container">
        <h1>Formulario Dieta</h1>
        <form class="form-horizontal" id="AddDieta">
            <div class="form-group">
                <label class="control-label col-sm-2" for="cita">CITA:</label>
                <div class="col-sm-4">
                    <select class="form-control" name="cita" id="cita">
                    </select>
                </div>
            
                <label class="control-label col-sm-2" for="diagnostico">DIAGNOSTICO:</label>
                <div class="col-sm-4">
                    <select class="form-control" name="diagnostico" id="diagnostico">
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="medico">MEDICO:</label>
                <div class="col-sm-4">
                    <select class="form-control" name="medico" id="medico">
                    </select>
                </div>

                <label class="control-label col-sm-2" for="alimento">ALIMENTO:</label>
                <div class="col-sm-4">
                    <select class="form-control" name="alimento" id="alimento">
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="cantidad">CANTIDAD:</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="cantidad" name="cantidad" >
                </div>
                <label class="control-label col-sm-2" for="Tcomida">TIEMPO COMIDA:</label>
                <div class="col-sm-4">
                    <select class="form-control" name="Tcomida" id="Tcomida">
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="descripcion">DESCRIPCION:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="descripcion" name="descripcion" >
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
    addDieta('#AddDieta');
    //Cpersona('php/Cpersona.php',"#persona");
    COMBO('php/Ccita.php',"#cita");
    COMBO('php/Cmedico.php',"#medico");
    COMBO('php/Cdiagnostico.php',"#diagnostico");
    COMBO('php/Calimento.php',"#alimento");
    COMBO('php/CTalimento.php',"#Tcomida");
</script>

