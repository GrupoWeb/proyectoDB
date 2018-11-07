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

function addCita(form){
    $(form).submit(function(e){
        e.preventDefault();
        let parametros = $(this).serialize()
        $.ajax({
            data: parametros,
            url: 'php/addCita.php',
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


function editarCita(form,pagina,modal) {
    $(form).submit(function (e) {
        e.preventDefault();
        let parametros = $(this).serialize()
        console.log(parametros);
        $.ajax({
            data: parametros,
            url: 'php/Ucita.php',
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

function editarEspecialidad(form, pagina, modal) {
    $(form).submit(function (e) {
        e.preventDefault();
        let parametros = $(this).serialize()
        console.log(parametros);
        $.ajax({
            data: parametros,
            url: 'php/Uespecialidad.php',
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

function eliminarCita(form,pagina,modal) {
    $(form).submit(function (e) {
        e.preventDefault();
        let parametros = $(this).serialize()
        $.ajax({
            data: parametros,
            url: 'php/Dcita.php',
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

function eliminarEspecialidad(form, pagina, modal) {
    $(form).submit(function (e) {
        e.preventDefault();
        let parametros = $(this).serialize()
        $.ajax({
            data: parametros,
            url: 'php/Despecialidad.php',
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


function Cpersona(url, lugar) {
    $.ajax({
        url: url,
        type: 'post',
        success: function (r) {
            $(lugar).html(r);
        }
    });
}


function llenarCombos(url,lugar) {
	$.ajax({
		url: url,
		type: 'post',
		success: function (r) {
			$(lugar).empty();
			r = JSON.parse(r);
			sedeItem = crearElemento('option', '__', '__', 'Seleccione...', '__', '__');
			sedeItem.setAttribute('value', '');
            $(lugar).append(sedeItem);
            console.log(lugar);
			for (i = 0; i < r.length; i++) {
                
				option = crearElemento('option', '__', '__', r[i][0], '__', r[i][1]);
				$(lugar).append(option);
			}
		}
	});
}


function llenarCombosID(url, lugar,id) {
	
	var dato = "id="+id;
	$.ajax({
		url: url,
		type: 'post',
		data: dato,
		success: function (r) {
			$(lugar).empty();
			r = JSON.parse(r);
			sedeItem = crearElemento('option', '__', '__', 'Seleccione...', '__', '__');
			sedeItem.setAttribute('value', '');
			$(lugar).append(sedeItem);
			for (i = 0; i < r.length; i++) {
				option = crearElemento('option', '__', '__', r[i][1], '__', r[i][0]);
				$(lugar).append(option);
			}
		}
	});
}

function crearElemento(elemento, identificador, clase, texto, ruta, valor) {
	item = document.createElement(elemento);
	if (identificador !== '__') { item.id = identificador; }
	if (clase !== '__') { item.className = clase; }
	if (texto !== '__') { item.innerText = texto; }
	if (ruta !== '__') { item.dataset.cargarVista = ruta; }
	if (valor !== '__') { item.value = valor; }
	return item;
}


function CierraPopup(modal) {
    $(modal).modal('hide'); //ocultamos el modal
    $('body').removeClass('modal-open'); //eliminamos la clase del body para poder hacer scroll
    $('.modal-backdrop').remove(); //eliminamos el backdrop del modal
}
