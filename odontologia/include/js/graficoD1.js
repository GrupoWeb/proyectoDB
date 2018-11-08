$(document).ready(function () {
    load_graphic('Reporte de alimentos');
});
google.charts.load('current', {'packages': ['corechart']});
google.charts.setOnLoadCallback();


function load_graphic(title) {
    var temp_title = title;
    $.ajax({
        url: "php/grafico.php",
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
    data.addColumn('string', 'Month');
    data.addColumn('number', 'Profit');

        $.each(jsonData, function (i, jsonData) {
            var month = jsonData.month;
            var profit = parseFloat($.trim(jsonData.profit));
            data.addRows([
                [month, profit]
            ]);
        });

    var options = {
        title: chart_main_title,
        curveType: 'function',
        legend: {
            position: 'bottom'
        }
    };

    var chart = new google.visualization.LineChart(document.getElementById('chart_line'));

    chart.draw(data, options);
} 

