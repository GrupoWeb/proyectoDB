$(document).ready(function() {
     $('#Rmedico').DataTable({
        "bDeferRender": true,
        "searching": true,
        "blengthChange":true,
        "sPaginationType":"full_numbers",
        "dom": '<"toolbar">frtip',
        "fnInitComplete": function(){
            $('div.toolbar').html('<h1>Reporte de Medicos</h1>');
          },
        "ajax": {
            "url": "php/rTmedico.php",
            "type": "POST" 
        },
        "columns": [
            { "data": "ID_MEDICOS" },
            { "data": "NOMBRE" },
            { "data": "ESPECIALIDAD"},
            { "data": "FECHA"}
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

} );

