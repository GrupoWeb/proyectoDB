$(document).ready(function() {
    var tabla = $('#Rdieta').DataTable({
        "bDeferRender": true,
        "searching": true,
        "blengthChange":true,
        "sPaginationType":"full_numbers",
        "dom": '<"toolbar">frtip',
        "fnInitComplete": function(){
            $('div.toolbar').html('<h1>Reporte de Dietas</h1>');
          },
        "ajax": {
            "url": "php/rTdieta.php",
            "type": "POST",
            "sAjaxDataProp": "aaData"
            
        },
        "columns": [
            { "data": "ID_DIETA" },
            { "data": "CITA" },
            { "data": "NOMBRE" },
            { "data": "DIAGNOSTICO" },
            { "defaultContent": "<button type='button' class='editar btn btn-primary' data-toggle='modal' data-target='#modalEditar'><i class='fas fa-pencil-alt'></i></button><button type='button' class='eliminar btn btn-danger' data-toggle='modal' data-target='#modalEliminar'><i class='fas fa-trash-alt'></i></button>"}
        ],
        
        "columnDefs": [
            { "width": "6%",  "targets": 0 },
            { "width": "30%", "targets": 1 },
            { "width": "20%", "targets":2},
            { "width": "10%", "targets":4}
          ],
        "dom": 'Bfrtip',
        "buttons": [
            {
                extend: 'excelHtml5',
                title: 'Reporte de Alimentos'
            },
            {
                extend: 'pdfHtml5',
                title: 'Reporte de Alimentos',
                messageTop: 'Reporte Gerencial',
                
            }
        ]
    } );
    obtener_data_editar("#Rdieta tbody", tabla);
    obtener_data_eliminar("#Rdieta tbody", tabla);
   
} );

function obtener_data_editar(tbody, table) {
    $(tbody).on("click","button.editar",function () {
        var data = table.row($(this).parents("tr")).data();
        var idfood = $("#idcita").val(data.ID_CITA);

    })
}

var obtener_data_eliminar = function (tbody, table) {
    $(tbody).on("click", "button.eliminar", function () {
        var data = table.row($(this).parents("tr")).data();
        var food = $("#iddcita").val(data.ID_CITA);

    })
}