<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <title>amCharts tutorial: Loading external data</title>
  <script src="http://www.amcharts.com/lib/3/amcharts.js"></script>
  <script src="http://www.amcharts.com/lib/3/pie.js"></script>
  <script src="http://www.amcharts.com/lib/3/serial.js"></script>
  <script src="http://www.amcharts.com/lib/3/plugins/dataloader/dataloader.min.js"></script>
</head>
<body>
  <div id="chartdiv" style="width: 100%; height: 500px;"></div>
  <script>


//cada grafica usa diferentes extensiones hay que cargar las correctas, hay que recoger las variables por su nombre
//hay que pasarlas a json mis dos variables son category value2 hay que usar la version 3 para usar el dataloader
var chart = AmCharts.makeChart("chartdiv",{
  "type"    : "pie",
  "dataLoader": {
      "url": "data2.php"
    },
  "titleField"  : "category",
  "valueField"  : "value1",
  "dataProvider"  : [
    {
      "category": "category 1",
      "value2": "value1"
    }
  ]
});









  </script>
</body>
</html>

