<body>
    <div class="container">
        <h1>Formulario de Ingreso Tiempo de Comida</h1>
        <form class="form-horizontal" id="Addtimes">
            <div class="form-group">
                <label class="control-label col-sm-2" for="time">Tiempo:</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="time" name="time" placeholder="Enter New Time">
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
    addTiempo('#Addtimes');
</script>

