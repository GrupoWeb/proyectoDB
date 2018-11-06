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
            success: function(response){
                if(response = 'success'){

                    swal({
                        title: "Alimento",
                        text: "Dato Almacenado!",
                        icon: "warning",
                        button: true,
                        dangerMode: true,
                      })
                      .then((willDelete) => {
                        if (willDelete) {
                            window.location.href = "http://localhost/proyecto/proyectoDB/odontologia/";
                        
                        } 
                      });
                }
            }
        })
       
    })
}

function addTiempo(form){
    $(form).submit(function(e){
        e.preventDefault();
        let parametros = $(this).serialize()
        $.ajax({
            data: parametros,
            url: 'php/addTime.php',
            type: "post",
            success: function(response){
                if(response = 'success'){
                    swal({
                        title: "Tiempo de Comida",
                        text: "Dato Almacenado!",
                        icon: "warning",
                        button: true,
                        dangerMode: true,
                      })
                      .then((willDelete) => {
                        if (willDelete) {
                            window.location.href = "http://localhost/proyecto/proyectoDB/odontologia/";
                        
                        } 
                      });
                                       
                }
            }
        })
       
    })
}


function addMedico(form){
    $(form).submit(function(e){
        e.preventDefault();
        let parametros = $(this).serialize()
        $.ajax({
            data: parametros,
            url: 'php/addmedico.php',
            type: "post",
            success: function(response){
                if(response = 'success'){
                    swal({
                        title: "Médico Asignado y Guardado",
                        text: "Dato Almacenado!",
                        icon: "warning",
                        button: true,
                        dangerMode: true,
                      })
                      .then((willDelete) => {
                        if (willDelete) {
                            window.location.href = "http://localhost/proyecto/proyectoDB/odontologia/";
                        
                        } 
                      });
                                       
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
                    swal("Edición Exitosa", "", "success");
                    CierraPopup(modal);
                    $("#contenido").load(pagina);
                }
            }
        })
    })
}


function editarTiempo(form,pagina,modal) {
    $(form).submit(function (e) {
        e.preventDefault();
        let parametros = $(this).serialize()
        console.log(parametros);
        $.ajax({
            data: parametros,
            url: 'php/Utiempo.php',
            type: "post",
            success: function (response) {
                if (response = 'success') {
                    swal("Edición Exitosa", "", "success");
                    CierraPopup(modal);
                    $("#contenido").load(pagina);
                }
            }
        })
    })
}



function eliminarAlimento(form,pagina,modal) {
    $(form).submit(function (e) {
        e.preventDefault();
        let parametros = $(this).serialize()
        $.ajax({
            data: parametros,
            url: 'php/Dalimento.php',
            type: "post",
            success: function (response) {
                if (response = 'success') {
                    swal("Dato Eliminado", "", "success");
                    CierraPopup(modal);
                    $("#contenido").load(pagina);
                }
            }
        })

    })
}

function eliminarTiempo(form,pagina,modal) {
    $(form).submit(function (e) {
        e.preventDefault();
        let parametros = $(this).serialize()
        $.ajax({
            data: parametros,
            url: 'php/Dtiempo.php',
            type: "post",
            success: function (response) {
                if (response = 'success') {
                    swal("Dato Eliminado", "", "success");
                    CierraPopup(modal);
                    $("#contenido").load(pagina);
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
