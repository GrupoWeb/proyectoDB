
<body>
    <div class="container">
        <h1>Formulario nuevo tipo</h1>
        <form class="form-horizontal" id="addtOdontologia">
            <div class="form-group">
                <label class="control-label col-sm-2" for="descripcion">Descripción:</label>
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
    addTipoOdontologia('#addtOdontologia');
</script>

