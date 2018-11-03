
<body>
    <div class="container">
        <h1>Formulario de Ingreso de Alimentos</h1>
        <form class="form-horizontal" id="Nalimento">
            <div class="form-group">
                <label class="control-label col-sm-2" for="food">Alimento:</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="food" name="food" placeholder="Enter New Food">
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
    enviarAlimento('#Nalimento');
</script>

