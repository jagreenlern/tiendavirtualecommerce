<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<?php
ini_set('display_errors','On');
error_reporting(E_ALL);
require_once 'funciones.php';
?>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
<title>Gráfico de Provincia</title>
<link rel="stylesheet" type="text/css" href="grafico_provincia.css">
<!--
Recursos decargados del CDN de amcharts
-->
<script src="https://cdn.amcharts.com/lib/4/core.js"></script>
<script src="https://cdn.amcharts.com/lib/4/charts.js"></script>
<script src="https://cdn.amcharts.com/lib/4/themes/frozen.js"></script>
<script src="https://cdn.amcharts.com/lib/4/themes/animated.js"></script>
<!--
Script para este ejemplo (desde una función PHP)
-->

</head>
<body>
<?php
 if(!isset($_GET['prov'])){
	 menu_provincias();
	 print "<p>Haz click una provincia</p>\n";
 }else{
	 menu_provincias($_GET['prov']);
	 grafico_provincia($_GET['prov']);
 }
?>
<div id="grafico"></div>
<p>Imagen de prueba para las amigables</p>
<img src="img/tarta.png" width="200" height="200">
</body>
</html>