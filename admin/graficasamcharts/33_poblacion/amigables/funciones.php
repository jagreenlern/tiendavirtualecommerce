<?php
	define('SERVIDOR',"localhost");   
	define('USUARIO','root');         
	define('CLAVE','');               
	define('BBDD',"poblacion");
/*
	define('SERVIDOR',"localhost");   
	define('USUARIO','juanjo');         
	define('CLAVE','12345');               
	define('BBDD',"poblacion");
	*/
	function datos_anuales($prov,$anho){
		//Si alguno de los dos no es numérico, return
		// ----------------------------------	
		// 1.-Abrimos conexión con la BBDD
		// ----------------------------------	
		@$conexion=mysqli_connect(SERVIDOR,USUARIO,CLAVE,BBDD) OR die("<p>Error de Conexión ".mysqli_connect_errno().": ".mysqli_connect_error()."</p>\n");
		// --------------------------------
		// 1.5.-DEFINIMOS EL CHARSET PARA RECIBIR  DATOS
		// --------------------------------
		mysqli_set_charset ( $conexion , 'utf8' );
		// --------------------------------
		// 2.-ESCRIBIMOS LA CONSULTA
		// --------------------------------
		$sql = "SELECT `provincias`.`codigo`, `provincias`.`nombre`, `censo`.`anho`, `censo`.`hombres`, `censo`.`mujeres` FROM `censo` LEFT JOIN `provincias` ON `provincias`.`codigo` = `censo`.`provincia` WHERE `provincias`.`codigo` = $prov AND `censo`.`anho`=$anho ";
		/*************************************************
		3.-La enviamos a la base de datos y obtenemos el objeto recurso
		*************************************************/
		@$resultado=mysqli_query($conexion,$sql)or
		die("<p>Error: ".mysqli_errno($conexion).": ".mysqli_error($conexion)."</p>");
		/*
		4.-"Hacemos cosas con los registros devueltos"
		Por ejemplo un control select option
		*/
		$datos=mysqli_fetch_assoc($resultado);
		 /*****************************************
		 5.-Liberamos memoria y cerramos la conexion
		 *******************************************/
		mysqli_free_result($resultado);
		mysqli_close($conexion);
		/*
		Aquí puedo devolver $datos o puedo escribir
		*/
		print "<p>En $datos[nombre] en el año  $datos[anho] había ".number_format($datos['mujeres'],0,'\'','.')." mujeres y ".number_format($datos['hombres'],0,'\'','.')." hombres.</p>";
	}
	
	function prueba_datos_bizkaia(){
	// ----------------------------------	
	// 1.-Abrimos conexión con la BBDD
	// ----------------------------------	
	@$conexion=mysqli_connect(SERVIDOR,USUARIO,CLAVE,BBDD) OR die("<p>Error de Conexión ".mysqli_connect_errno().": ".mysqli_connect_error()."</p>\n");
	// --------------------------------
	// 1.5.-DEFINIMOS EL CHARSET PARA RECIBIR  DATOS
	// --------------------------------
	mysqli_set_charset ( $conexion , 'utf8' );
	// --------------------------------
	// 2.-ESCRIBIMOS LA CONSULTA
	// --------------------------------
	$sql = "SELECT `hombres`,`mujeres`,`anho` FROM `censo` WHERE `provincia` = 48 ORDER BY `censo`.`anho` ASC ";
	/*************************************************
	3.-La enviamos a la base de datos y obtenemos el objeto recurso
	*************************************************/
	@$resultado=mysqli_query($conexion,$sql)or
	die("<p>Error: ".mysqli_errno($conexion).": ".mysqli_error($conexion)."</p>");
	/*
	4.-"Hacemos cosas con los registros devueltos"
	Por ejemplo un control select option
	*/
	$datos_completos=mysqli_fetch_all($resultado,MYSQLI_ASSOC);
	 /*****************************************
	 5.-Liberamos memoria y cerramos la conexion
	 *******************************************/
	mysqli_free_result($resultado);
	mysqli_close($conexion);
	return json_encode($datos_completos, JSON_PRETTY_PRINT);

	}
	
	function menu_provincias($activo=-1){
		//Si alguno de los dos no es numérico, return
		// ----------------------------------	
		// 1.-Abrimos conexión con la BBDD
		// ----------------------------------	
		@$conexion=mysqli_connect(SERVIDOR,USUARIO,CLAVE,BBDD) OR die("<p>Error de Conexión ".mysqli_connect_errno().": ".mysqli_connect_error()."</p>\n");
		// --------------------------------
		// 1.5.-DEFINIMOS EL CHARSET PARA RECIBIR  DATOS
		// --------------------------------
		mysqli_set_charset ( $conexion , 'utf8' );
		// --------------------------------
		// 2.-ESCRIBIMOS LA CONSULTA
		// --------------------------------
		$sql = "SELECT *  FROM `provincias` ORDER BY `nombre`";
		/*************************************************
		3.-La enviamos a la base de datos y obtenemos el objeto recurso
		*************************************************/
		@$resultado=mysqli_query($conexion,$sql)or
		die("<p>Error: ".mysqli_errno($conexion).": ".mysqli_error($conexion)."</p>");
		/*
		4.-"Hacemos cosas con los registros devueltos"
		Por ejemplo un control select option
		*/
		print "<ul class=\"menu\">\n";
		while($fila=mysqli_fetch_assoc($resultado)){
			$marcado=($activo==$fila['codigo'])?' class="activo" ':"";
			// print "<li><a href=\"grafico_provincia.php?prov=$fila[codigo]\" $marcado>$fila[nombre]</a></li>";
			//Podriamos usar $_SERVER['PHP_SELF']
			print "<li><a href=\"informe-completo/$fila[codigo]/\" $marcado>$fila[nombre]</a></li>\n";
		}
		print "</ul>\n";
		 /*****************************************
		 5.-Liberamos memoria y cerramos la conexion
		 *******************************************/
		mysqli_free_result($resultado);
		mysqli_close($conexion);
	}


	function json_datos_provincia($codigo){
	// ----------------------------------	
	// 1.-Abrimos conexión con la BBDD
	// ----------------------------------	
	@$conexion=mysqli_connect(SERVIDOR,USUARIO,CLAVE,BBDD) OR die("<p>Error de Conexión ".mysqli_connect_errno().": ".mysqli_connect_error()."</p>\n");
	// --------------------------------
	// 1.5.-DEFINIMOS EL CHARSET PARA RECIBIR  DATOS
	// --------------------------------
	mysqli_set_charset ( $conexion , 'utf8' );
	// --------------------------------
	// 2.-ESCRIBIMOS LA CONSULTA
	// --------------------------------
	$sql = "SELECT `hombres`,`mujeres`,`anho` FROM `censo` WHERE `provincia` = $codigo ORDER BY `censo`.`anho` ASC ";
	/*************************************************
	3.-La enviamos a la base de datos y obtenemos el objeto recurso
	*************************************************/
	@$resultado=mysqli_query($conexion,$sql)or
	die("<p>Error: ".mysqli_errno($conexion).": ".mysqli_error($conexion)."</p>");
	/*
	4.-"Hacemos cosas con los registros devueltos"
	Por ejemplo un control select option
	*/
	$datos_completos=mysqli_fetch_all($resultado,MYSQLI_ASSOC);
	 /*****************************************
	 5.-Liberamos memoria y cerramos la conexion
	 *******************************************/
	mysqli_free_result($resultado);
	mysqli_close($conexion);
	return json_encode($datos_completos, JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE);
	}
	
	function grafico_provincia($prov){
		$datos=json_datos_provincia($prov);
	print <<<AMCHARTS
<script>	
am4core.ready(function() {

// Themes begin
am4core.useTheme(am4themes_frozen);
am4core.useTheme(am4themes_animated);
// Themes end

// Create chart instance
var chart = am4core.create("grafico", am4charts.XYChart3D);

// Add data
chart.data = $datos;

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
AMCHARTS;
	}

?>