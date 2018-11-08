
<body>
    <div class="container">
        <h1>Formulario Paciente Odontologia</h1>
        <form class="form-horizontal" id="Addodontologia">
            <div class="form-group">
                <label class="control-label col-sm-2" for="dclinica">CLINICA:</label>
                <div class="col-sm-4">
                    <select class="form-control" name="dclinica" id="dclinica">
                    </select>
                </div>
                <label class="control-label col-sm-2" for="Otipo">TIPO ODONTOLOGIA:</label>
                <div class="col-sm-4">
                    <select  name="Otipo"  id="Otipo" class="form-control">
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="persona">PERSONA:</label>
                <div class="col-sm-4">
                    <select  name="persona"  id="persona" class="form-control">
                    </select>
                </div>

                <label class="control-label col-sm-2" for="medico">MEDICO:</label>
                <div class="col-sm-4">
                    <select  name="medico"  id="medico" class="form-control">
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="diagnostico">DIAGNOSTICO:</label>
                <div class="col-sm-4">
                    <select  name="diagnostico"  id="diagnostico" class="form-control">
                    </select>
                </div>

            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="obs">OBSERVACION:</label>
                <div class="col-sm-10">
                    <textarea name="obs" id="obs" cols="30" rows="10" class="form-control"></textarea>
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

    addOdontologia('#Addodontologia');
    COMBO('php/Cclinica.php','#dclinica');
    COMBO('php/Codontologia.php','#Otipo');
    COMBO('php/Cpersona.php','#persona');
    COMBO('php/Cmedico.php','#medico');
    COMBO('php/Cdiagnostico.php','#diagnostico');
</script>

