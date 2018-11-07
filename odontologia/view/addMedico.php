<body>
    <div class="container">
        <h1>Formulario Nuevo Médico</h1>
        <form class="form-horizontal" id="AddMedicos">
            <div class="form-group">
                <label class="control-label col-sm-2" for="espe">Especialidad:</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="espe" name="espe" placeholder="Ingrese nueva Especialidad">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="persona">Empleado:</label>
                <div class="col-sm-10">
                <select  name="persona"  id="persona" class="form-control">
                </select>
                
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
    addMedico('#AddMedicos');
    Cpersona('php/Cpersona.php',"#persona");
</script>

