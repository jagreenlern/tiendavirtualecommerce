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
<title>Datos anuales de la provincia <?php print $_GET['prov'] ?></title>
<style type="text/css">
body{
	background-image:url('icon/moroccan-flower.png');
}
</style>
</head>
<body>
<img src="img/tarta.png" width="200" height="200">
<?php
datos_anuales($_GET['prov'],$_GET['anho']);
?>
</body>
</html>