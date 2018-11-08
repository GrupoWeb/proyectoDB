<?php
$host= $_SERVER["HTTP_HOST"];
$url= $_SERVER["REQUEST_URI"];
//echo "http://" . $host . $url;
?>
<script src="include/js/datatables/Rdieta.js"></script>
<script src="include/js/comandos.js"></script>

<body>
<div class="toolbar">
</div>
    <div class="container">
        <table class="table  table-hover table-striped table-bordered" id="Rdieta" style="width:100%">
            <thead>
                <th>ID DIETAs/th>
                <th>CITA</th>
                <th>NOMBRE MEDICO</th>
                <th>DIAGNOSTICO</th>
               
            </thead>
        </table>
    </div>
    
</body>

