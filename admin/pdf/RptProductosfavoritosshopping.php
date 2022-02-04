<?php 

	include 'plantilla.php';
	include 'db_connect_shopping.php';

	$query = "select products.productCompany productCompany,products.productPriceBeforeDiscount as productPriceBeforeDiscount,products.productName as pname	,products.productImage1 as pimage,products.productPrice as pprice,wishlist.productId as pid,wishlist.id as wid from wishlist join products on products.id=wishlist.productId";
	//$query = "select products.productName as pname	,products.productImage1 as pimage,products.productPrice as pprice,wishlist.productId as pid,wishlist.id as wid from wishlist join products on products.id=wishlist.productId inner join users on users.id=wishlist.userId WHERE users.name like '%Pablo%'";
	$resultado = $connect->query($query);


	$pdf = new Productosfavoritosshopping('L','mm','legal');
	$pdf->AliasNbPages();
	$pdf->AddPage();
	$var=	15;
	while($row = $resultado->fetch_assoc() ){
		
		$pdf->SetFont('Arial','',9);
		
		$pdf->Cell(40,6,utf8_decode($row['pid']),1,0,'L');	
		$pdf->Cell(150,6,$row['pname'],1,0,'L');
		

		//$pdf->Cell(150,6,utf8_decode($row['']),1,0,'L');
		//$pdf->Image('images/stars.png', 55, $var, 30); x,y,anchoimagen
		$pdf->Image('../productimages/'.$row['pid'].'/'.$row['pimage'], 340, $var, 15);
		
		$var=$var+30;
		
		$pdf->Cell(70,6,utf8_decode($row['productCompany']),1,0,'L');
		$pdf->Cell(35,6,utf8_decode($row['pprice']),1,0,'L');	
		$pdf->Cell(35,6,utf8_decode($row['productPriceBeforeDiscount']),1,1,'L');
		
		//$pdf->Cell(20,6,$row['cantidad'],1,0,'C');
		//	$pdf->Cell(15,6,$row['productAvailability'],1,1,'C');
			
	}

	$pdf->Output(utf8_decode('Productosfavoritos.pdf'), 'I');
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