<?php 

	include 'plantilla.php';
	include 'db_connect_shopping.php';

	$query = "select * from category";
	
	$resultado = $connect->query($query);


	$pdf = new Catshopping('L','mm','legal');
	$pdf->AliasNbPages();
	$pdf->AddPage();

	while($row = $resultado->fetch_assoc() ){
		
		$pdf->SetFont('Arial','',9);
		$pdf->Cell(50,6,utf8_decode($row['id']),1,0,'L');
		$pdf->Cell(50,6,utf8_decode($row['categoryName']),1,0,'L');
		
		$pdf->Cell(80,6,utf8_decode($row['categoryDescription']),1,0,'L');
		$pdf->Cell(70,6,utf8_decode($row['creationDate']),1,0,'L');
		
		//$pdf->Cell(20,6,$row['cantidad'],1,0,'C');
		$pdf->Cell(95,6,utf8_decode($row['updationDate']),1,1,'L');
		
//		$pdf->Cell(30,6,utf8_decode($row['quantity']*$row['productprice']+$row['shippingcharge']),1,0,'L');
//		$pdf->Cell(30,6,utf8_decode($row['orderdate']),1,1,'L');
		
		

	}

	$pdf->Output(utf8_decode('Pedidos Hoy.pdf'), 'I');

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