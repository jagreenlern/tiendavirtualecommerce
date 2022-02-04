<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">
<?php
require_once 'funciones.php';
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
<title>Prueba amcharts</title>
<style type="text/css">
#dibujito {
  width: 100%;
  height: 500px;
}

</style>
<script src="https://cdn.amcharts.com/lib/4/core.js"></script>
<script src="https://cdn.amcharts.com/lib/4/charts.js"></script>
<script src="https://cdn.amcharts.com/lib/4/themes/frozen.js"></script>
<script src="https://cdn.amcharts.com/lib/4/themes/animated.js"></script>
<script>
am4core.ready(function() {

// Themes begin
am4core.useTheme(am4themes_frozen);
am4core.useTheme(am4themes_animated);
// Themes end

// Create chart instance
var chart = am4core.create("dibujito", am4charts.XYChart3D);

// Add data
chart.data = <?php print prueba_datos_bizkaia(); ?>;

// Create axes
var categoryAxis = chart.xAxes.push(new am4charts.CategoryAxis());
categoryAxis.dataFields.category = "anho";
categoryAxis.renderer.grid.template.location = 0;
categoryAxis.renderer.minGridDistance = 30;

var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
valueAxis.title.text = "Población por sexos";
// valueAxis.renderer.labels.template.adapter.add("text", function(text) {
  // return text + "%";
// });

// Create series
var series = chart.series.push(new am4charts.ColumnSeries3D());
series.dataFields.valueY = "hombres";
series.dataFields.categoryX = "anho";
series.name = "Hombres";
series.clustered = false;
series.columns.template.tooltipText = "Hombres en {categoryX}: [bold]{valueY}[/]";
series.columns.template.fillOpacity = 0.9;

var series2 = chart.series.push(new am4charts.ColumnSeries3D());
series2.dataFields.valueY = "mujeres";
series2.dataFields.categoryX = "anho";
series2.name = "Mujeres";
series2.clustered = false;
series2.columns.template.tooltipText =  "Mujeres en {categoryX}: [bold]{valueY}[/]";

}); // end am4core.ready()
</script>
</head>
<body>
<div id="dibujito"></div>
<p>Prueba de datos</p>
<?php
// print "<pre>\n";
// print prueba_datos_bizkaia();
// print "</pre>\n";
?>
</body>
</html>