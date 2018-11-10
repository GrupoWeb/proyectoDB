$(document).ready(function () {
    load_graphic('Genero');
});
google.charts.load('current', {'packages': ['corechart']});
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

    alert("hona");


    var jsonData = chart_data;
    var data = new google.visualization.DataTable();
    data.addColumn('string', 'anno');
    data.addColumn('number', 'cantidad');
console.log(jsonData);
        $.each(jsonData, function (i, jsonData) {
            var anno = jsonData.anno;
            var cantidad = jsonData.cantidad;
            console.log(anno);
            console.log(cantidad);
            data.addRows([
                [anno, cantidad]
            ]);
        });


    var options = {
        title: 'Genero'
      };

      var chart = new google.visualization.PieChart(document.getElementById('table_div'));
      chart.draw(data, options);
} 

