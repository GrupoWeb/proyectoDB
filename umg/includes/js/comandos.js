$(document).ready(function(){

    $('#Nuevo').click(function(){
        $("body").removeClass('body');
        CargarPagina('#contenedor','view/registro.php');

    })
    $('#adelantar').click(function(){
        $('#Persona').removeClass("active");
        $('#Direccion').addClass("active");
    });

    $('#Dadelantar').click(function(){
        $('#Direccion').removeClass("active");
        $('#Telefono').addClass("active");
    });
    $('#DAnterior').click(function(){
        $('#Direccion').removeClass("active");
        $('#Persona').addClass("active");
    });

        enviarPersona('#registro');

})

function CargarPagina(contenedor,pagina){
    $(contenedor).load(pagina);
}

$(function(){
    $('a[title]').tooltip();
});

function enviarPersona(form){
    $(form).submit(function(e){
        e.preventDefault();
        let data = $(this).serialize()
        console.log(data);
       
    })
}