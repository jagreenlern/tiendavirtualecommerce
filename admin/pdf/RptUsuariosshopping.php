<?php 

	include 'plantilla.php';
	include 'db_connect_shopping.php';

	$query = "select id,users.name as username,users.email as useremail,users.contactno as usercontact,users.billingAddress as billingaddress,users.billingCity as billingcity,users.billingState as billingstate,users.billingPincode as billingpincode from users ";
	
	$resultado = $connect->query($query);


	$pdf = new Usuariosshopping('L','mm','legal');
	$pdf->AliasNbPages();
	$pdf->AddPage();

	while($row = $resultado->fetch_assoc() ){
		
		$pdf->SetFont('Arial','',9);
		$pdf->Cell(50,6,utf8_decode($row['id']),1,0,'L');
		$pdf->Cell(50,6,utf8_decode($row['username']),1,0,'L');
		$pdf->Cell(50,6,utf8_decode($row['usercontact']),1,0,'L');
		$pdf->Cell(50,6,utf8_decode($row['useremail']),1,0,'L');
		
		$pdf->Cell(145,6,utf8_decode($row['billingaddress'].",".$row['billingcity'].",".$row['billingstate']."-".$row['billingpincode']),1,1,'L');
		//$pdf->Cell(70,6,utf8_decode($row['productname']),1,0,'L');
		
		//$pdf->Cell(20,6,$row['cantidad'],1,0,'C');
		//$pdf->Cell(35,6,utf8_decode($row['quantity']),1,0,'L');
		
		//$pdf->Cell(30,6,utf8_decode($row['quantity']*$row['productprice']+$row['shippingcharge']),1,0,'L');
		//$pdf->Cell(30,6,utf8_decode($row['orderdate']),1,1,'L');
		
		

	}

	$pdf->Output(utf8_decode('Usuarios Hoy.pdf'), 'I');

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