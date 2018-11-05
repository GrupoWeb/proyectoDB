$(document).ready(function() {
    $('#Ralimento').DataTable( {
        "bDeferRender": true,
        "searching": true,
        "blengthChange":true,
        "sPaginationType":"full_numbers",
        "dom": '<"toolbar">frtip',
        "fnInitComplete": function(){
            $('div.toolbar').html('<h1>Reporte de Alimentos</h1>');
          },
        "ajax": {
            "url": "php/rTalimento.php",
            "type": "POST" 
        },
        "columns": [
            { "data": "ID_ALIMENTO" },
            { "data": "ALIMENTO" }
        ],
        "columnDefs": [
            { "width": "6%", "targets": 0 },
            { "width": "40%", "targets": 1 }
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
   
} );