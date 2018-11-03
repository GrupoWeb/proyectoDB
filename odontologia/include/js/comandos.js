$(document).ready(function(){


})

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
                }
            }
        })
       
    })
}