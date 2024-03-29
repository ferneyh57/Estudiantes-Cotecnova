<!DOCTYPE html>
<html>
<head>
<title>Creating Dynamic Data Graph using PHP and Chart.js</title>
<style type="text/css">
BODY {
    width: 550PX;
}

#chart-container {
    width: 100%;
    height: auto;
}
</style>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/Chart.js"></script>


</head>
<body>
    <div id="chart-container">
        <canvas id="graphCanvas"></canvas>
    </div>

    <script>
        $(document).ready(function () {
            showGraph();
        });


        function showGraph()
        {
            {
                $.post("validacion_graficas.php",
                function (data)
                {
                    console.log(data);
                     var programa_nombre = [];
                    var cantidad = [];

                    for (var i in data) {
                        programa_nombre.push(data[i].programa_nombre);
                        cantidad.push(data[i].cantidad);
                    }

                    var chartdata = {
                        labels: programa_nombre,
                        datasets: [
                            {
                                label: 'Estudiantes por programa',
                                backgroundColor: '#ccccc',
                                borderColor: '#46d5f1',
                                hoverBackgroundColor: '#CCCCCC',
                                hoverBorderColor: '#666666',
                                data: cantidad
                            }
                        ]
                    };

                    var graphTarget = $("#graphCanvas");

                    var barGraph = new Chart(graphTarget, {
                        type: 'bar',
                        data: chartdata
                    });
                });
            }
        }
        </script>



        

</body>
</html>