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

// Add data de todos los años si no le pasamos
chart.data = <?php print datos_shoppingano(); ?>;


// Create axes
var categoryAxis = chart.xAxes.push(new am4charts.CategoryAxis());
categoryAxis.dataFields.category = "ano";
categoryAxis.renderer.grid.template.location = 0;
categoryAxis.renderer.minGridDistance = 30;

var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
valueAxis.title.text = "Productos por año";
// valueAxis.renderer.labels.template.adapter.add("text", function(text) {
  // return text + "%";
// });

// Create series



var series2 = chart.series.push(new am4charts.ColumnSeries3D());
series2.dataFields.valueY = "ppbd";
series2.dataFields.categoryX = "ano";
series2.name = "Precio preducto antes descuento";
series2.clustered = false;
series2.columns.template.tooltipText =  "Precio preducto antes descuento {categoryX}: [bold]{valueY}[/]";

var series = chart.series.push(new am4charts.ColumnSeries3D());
series.dataFields.valueY = "pp";
series.dataFields.categoryX = "ano";
series.name = "Precio preducto";
series.clustered = false;
series.columns.template.tooltipText = "Precio preducto {categoryX}: [bold]{valueY}[/]";
series.columns.template.fillOpacity = 0.9;


}); // end am4core.ready()
</script>
</head>
<body>
<div id="dibujito"></div>
<p>Prueba de datos</p>
<?php
print "<pre>\n";
print datos_shoppingano();
print "</pre>\n";
?>
</body>
</html>