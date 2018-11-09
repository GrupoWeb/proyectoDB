$(document).ready(function () {
    load_graphic('Especialidad Medica');
});
google.charts.load('current', {'packages': ['table']});
google.charts.setOnLoadCallback();


function load_graphic(title) {
    var temp_title = title;
    $.ajax({
        url: "php/graficoFecha.php",
        method: "POST",
        dataType: "JSON",
        success: function (data) {
            drawChart(data, temp_title);
        }
    });
}


function drawChart(chart_data, chart_main_title) {

    var jsonData = chart_data;


        var data = new google.visualization.DataTable();
        data.addColumn('string', 'cantidad');
        data.addColumn('number', 'anno');
        data.addColumn('number', 'mes');
        $.each(jsonData, function (i, jsonData) {
            var cantidad = parseFloat($.trim(jsonData.CANTIDAD));
            var anno = parseFloat($.trim(jsonData.ANNO));
            var mes = parseFloat($.trim(jsonData.MES));
            data.addRows([
                [cantidad, anno, mes]
            ]); 
        });
        var table = new google.visualization.Table(document.getElementById('chart_linea'));

        table.draw(data, {showRowNumber: true, width: '100%', height: '100%'});

} 

