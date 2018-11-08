$(document).ready(function() {
     $('#Rodontologia').DataTable( {
        "bDeferRender": true,
        "searching": true,
        "blengthChange":true,
        "sPaginationType":"full_numbers",
        "dom": '<"toolbar">frtip',
        "fnInitComplete": function(){
            $('div.toolbar').html('<h1>Reporte Citas Odontologia</h1>');
          },
        "ajax": {
            "url": "php/rTodontologia.php",
            "type": "POST" 
        },
        "columns": [
            { "data": "CODIGO" },
            { "data": "NOMBRE" },
            { "data": "NOMBREMEDICO" },
            { "data": "DESCRIPCION" },
            { "data": "OBSERVACION" },
            { "data": "DIAGNOSTICO" },
            { "data": "FECHAREGISTRO" }
            
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

