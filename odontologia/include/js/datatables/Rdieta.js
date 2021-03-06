$(document).ready(function() {
     $('#Rdieta').DataTable({
        "bDeferRender": true,
        "searching": true,
        "blengthChange":true,
        "sPaginationType":"full_numbers",
        "dom": '<"toolbar">frtip',
        "fnInitComplete": function(){
            $('div.toolbar').html('<h1>Reporte de Dietass</h1>');
          },
        "ajax": {
            "url": "php/rTdieta.php",
            "type": "POST" 
        },
        "columns": [
            { "data": "ID_DIETA" },
            { "data": "CITA" },
            { "data": "NOMBRE" },
            { "data": "DIAGNOSTICO" }
        ],
        
        "columnDefs": [
            { "width": "6%",  "targets": 0 },
            { "width": "30%", "targets": 1 },
            { "width": "20%", "targets":2}
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
