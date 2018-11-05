function CargarPagina(contenedor,pagina){
    $(contenedor).load(pagina);
}

function enviarAlimento(form){
    $(form).submit(function(e){
        e.preventDefault();
        let parametros = $(this).serialize()
        $.ajax({
            data: parametros,
            url: 'php/addAlimento.php',
            type: "post",
            beforeSend: function(){
                $('#contenido').html("<h1>Procesando Información, espere por favor....</h1>")
            },
            success: function(response){
                if(response = 'success'){
                    alert("Dato Almacenado");
                    window.location.href = "http://localhost/proyecto/proyectoDB/odontologia/";
                }
            }
        })
       
    })
}

function editarAlimento(form,pagina,modal) {
    $(form).submit(function (e) {
        e.preventDefault();
        let parametros = $(this).serialize()
        console.log(parametros);
        $.ajax({
            data: parametros,
            url: 'php/Ualimento.php',
            type: "post",
            success: function (response) {
                if (response = 'success') {
                    alert("Dato Almacenado");
                    CierraPopup(modal);
                    $("#contenido").load(pagina);
                }
            }
        })
    })
}

function eliminarAlimento(form) {
    $(form).submit(function (e) {
        e.preventDefault();
        let parametros = $(this).serialize()
        $.ajax({
            data: parametros,
            url: 'php/Dalimento.php',
            type: "post",
            beforeSend: function () {
                $('#contenido').html("<h1>Procesando Información, espere por favor....</h1>")
            },
            success: function (response) {
                if (response = 'success') {
                    alert("Dato Almacenado");
                    window.location.href = "http://localhost/proyecto/proyectoDB/odontologia/";
                }
            }
        })

    })
}

function CierraPopup(modal) {
    $(modal).modal('hide'); //ocultamos el modal
    $('body').removeClass('modal-open'); //eliminamos la clase del body para poder hacer scroll
    $('.modal-backdrop').remove(); //eliminamos el backdrop del modal
}
