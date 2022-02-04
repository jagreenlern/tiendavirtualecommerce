<?php 

	include 'plantilla.php';
	include 'db_connect_shopping.php';

	$query = "select  users.name as name, users.billingAddress as ba, users.billingState as bs,users.billingCity as bc,users.billingPincode as bp,orders.id as id,products.productPrice as pp ,orders.quantity as cantidad,sum(products.productPrice)*sum(orders.quantity) as totalfinal  from orders inner JOIN products on orders.productId=products.id inner join users on users.id=orders.userId GROUP by orders.orderDate";
	$resultado = $connect->query($query);


	$pdf = new Pedidosshopping('L','mm','legal');
	$pdf->AliasNbPages();
	$pdf->AddPage();

	while($row = $resultado->fetch_assoc() ){
		
		$pdf->SetFont('Arial','',9);
		$pdf->Cell(40,6,$row['name'],1,0,'L');
		$pdf->Cell(50,6,utf8_decode($row['ba']),1,0,'L');
		$pdf->Cell(70,6,utf8_decode($row['bs']),1,0,'L');
		$pdf->Cell(35,6,utf8_decode($row['bc']),1,0,'L');
		$pdf->Cell(35,6,utf8_decode($row['bp']),1,0,'L');
		
		//$pdf->Cell(20,6,$row['cantidad'],1,0,'C');
		$pdf->Cell(30,6,$row['id'],1,0,'C');




		$pdf->Cell(30,6,$row['pp'],1,0,'C');	
		$pdf->Cell(30,6,$row['cantidad'],1,0,'C');
		$pdf->Cell(30,6,$row['totalfinal'],1,1,'C');
	}

	$pdf->Output(utf8_decode('Pedidos.pdf'), 'I');
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