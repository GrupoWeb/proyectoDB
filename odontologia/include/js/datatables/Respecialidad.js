$(document).ready(function() {
    var tabla = $('#Respecialidad').DataTable( {
        "bDeferRender": true,
        "searching": true,
        "blengthChange":true,
        "sPaginationType":"full_numbers",
        "dom": '<"toolbar">frtip',
        "fnInitComplete": function(){
            $('div.toolbar').html('<h1>Reporte de Especialidades</h1>');
          },
        "ajax": {
            "url": "php/rTespecialidad.php",
            "type": "POST" 
        },
        "columns": [
            { "data": "ID_ESPECIALIDAD" },
            { "data": "ESPECIALIDAD" },
            { "defaultContent": "<button type='button' class='editar btn btn-primary' data-toggle='modal' data-target='#modalEditar'><i class='fas fa-pencil-alt'></i></button><button type='button' class='eliminar btn btn-danger' data-toggle='modal' data-target='#modalEliminar'><i class='fas fa-trash-alt'></i></button>"}
        ],
        "columnDefs": [
            { "width": "6%",  "targets": 0 },
            { "width": "60%", "targets": 1 },
            { "width": "10%", "targets":2}
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
    obtener_data_editar("#Respecialidad tbody", tabla);
    obtener_data_eliminar("#Respecialidad tbody", tabla);
   
} );

function obtener_data_editar(tbody, table) {
    $(tbody).on("click","button.editar",function () {
        var data = table.row($(this).parents("tr")).data();
        var food = $("#especialidad").val(data.ESPECIALIDAD);
        var idfood = $("#idespe").val(data.ID_ESPECIALIDAD);

    })
}

var obtener_data_eliminar = function (tbody, table) {
    $(tbody).on("click", "button.eliminar", function () {
        var data = table.row($(this).parents("tr")).data();
        var food = $("#idespecialidad").val(data.ID_ESPECIALIDAD);

    })
}