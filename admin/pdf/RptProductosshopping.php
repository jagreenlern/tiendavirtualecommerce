<?php 




	include 'plantilla.php';
	include 'db_connect_shopping.php';



	$pdf = new Productosshopping('L','mm','legal');
	
	$pdf->AliasNbPages();
	$pdf->AddPage();
	$pdf->SetFont('Arial','',9);
	if(isset($_GET['categoria']) && ($_GET['categoria'])!='' && isset($_GET['subcategoria']) && ($_GET['subcategoria'])!='' && isset($_GET['desde']) && ($_GET['desde'])!='' && isset($_GET['hasta']) && ($_GET['hasta'])!='')
	{
	

		$desde = $_GET['desde'];
		$hasta = $_GET['hasta'];
		$categoria = $_GET['categoria'];
		$subcategoria = $_GET['subcategoria'];
	
		$query = $query = "SELECT * FROM products inner join category on category.id=products.category inner join subcategory on subcategory.id=products.subCategory where category.categoryName='$categoria' and  subcategory.subcategory='$subcategoria' 	and products.postingDate between '$desde' and '$hasta'";
		//WHERE orders.fecha_add BETWEEN '$desde' AND '$hasta' AND tipo_orden = 2 ";
		$resultado = $connect->query($query);
		 $pdf->Cell(40,6,'hola',1,0,'L');
	}
	else
	if(isset($_GET['categoria']) && ($_GET['categoria'])!='' && isset($_GET['subcategoria']) && ($_GET['subcategoria'])!=''){
		$categoria = $_GET['categoria'];
		$subcategoria = $_GET['subcategoria'];
		$query = "SELECT * FROM products inner join category on category.id=products.category inner join subcategory on subcategory.id=products.subCategory where category.categoryName='$categoria' and  subcategory.subcategory='$subcategoria'";
		$resultado = $connect->query($query);
		//$pdf->Cell(40,6,'hola',1,0,'L');
		
	}
	else
	if(isset($_GET['categoria']) && ($_GET['categoria'])!=''){
		$categoria = $_GET['categoria'];
	//	$subcategoria = $_GET['subcategoria'];
		$query = "SELECT * FROM products inner join category on category.id=products.category inner join subcategory on subcategory.id=products.subCategory where category.categoryName='$categoria'";
		$resultado = $connect->query($query);
		//$pdf->Cell(40,6,'hola',1,0,'L');
	


	}
	else
	{
	
		$query = "SELECT * FROM products ";
		$resultado = $connect->query($query);
		//$pdf->Cell(40,6,'hola',1,0,'L');
	}
	while($row = $resultado->fetch_assoc() ){
		
		
		$pdf->Cell(40,6,$row['id'],1,0,'L');
		$pdf->Cell(150,6,utf8_decode($row['productName']),1,0,'L');
		$pdf->Cell(70,6,utf8_decode($row['productCompany']),1,0,'L');
		$pdf->Cell(35,6,utf8_decode($row['productPrice']),1,0,'L');
		$pdf->Cell(35,6,utf8_decode($row['productPriceBeforeDiscount']),1,0,'L');
		
		//$pdf->Cell(20,6,$row['cantidad'],1,0,'C');
		$pdf->Cell(15,6,$row['productAvailability'],1,1,'C');
			
	}

	$pdf->Output(utf8_decode('Productos.pdf'), 'I');
	#$pdf->Output('D');
	#$pdf->Output('F','Catalogo de Clientes');

	/**
	* Documentacion
	*$pdf->Cell(70,6,'Direccion',1,0,'C',1);
	*60->Longitud
	*6-> Alto
	*1-> Borde(salto de linea)
	*0-> No tiene Salto de Linea, 1-> Si tiene salto de Linea
	*C-> Centrado
	*1-> Relleno (Color)
	*
	*/
?>