$(document).ready(function(){

    load_graphic("hola");
})
google.charts.load('current', {'packages':['table']});
google.charts.setOnLoadCallback(drawTable);


function load_graphic(title) {
    var temp_title = title;
    
}



function drawTable() {
    var data = new google.visualization.DataTable();
    data.addColumn('number', 'AÑO');
    data.addColumn('string', 'CANTIDAD');
    //llamado al ajax
    $.ajax({
        url: "php/graficofecha.php",
        method: "POST",
        dataType: "JSON",
        success: function (jsondata) {
            var jsonData = jsondata;
            
            $.each(jsonData, function(i, jsonData){
                var month = jsonData.cantidad;
                var profit = jsonData.anno;
                console.log(month);
                data.addRows([[profit,{month}]]);
            });

           
        }
    });


  var table = new google.visualization.Table(document.getElementById('table_div'));

  table.draw(data, {showRowNumber: true, width: '100%', height: '100%'});
}
