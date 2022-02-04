<?php 

	require 'fpdf/fpdf.php';

	/**
	* Clase Para los Catálogo de Clientes
	*/
	class PDF extends FPDF{
		
		function Header(){

			$this->Image('images/stars.png', 5, 5, 30);
			$this->SetFont('Arial','B',15);
			$this->Cell(30);
			$this->Cell(120,10,utf8_decode( 'Catálogo De Clientes'),0,0,'C');
			$this->SetFont('Arial','B',10);
			$this->Cell(50, 10, 'Hoy: '.date('d/m/Y').'', 0);
			$this->Ln(20);
		}

		function Footer(){

			$this->SetY(-15);
			$this->SetFont('Arial','I', 8);
			$this->Cell(0,10, 'Pagina '.$this->PageNo().'/{nb}',0,0,'C' );
		}
		
	}


	/**
	* Reporte de Clientes Activos  
	*/
	class Activos extends FPDF{
		
		function Header(){

			$this->Image('images/stars.png', 5, 5, 30);
			$this->SetFont('Arial','B',15);
			$this->Cell(30);
			$this->Cell(120,10,utf8_decode( 'Clientes Activos'),0,0,'C');
			$this->SetFont('Arial','B',10);
			$this->Cell(50, 10, 'Hoy: '.date('d/m/Y').'', 0);
			$this->Ln(20);
		}

		function Footer(){

			$this->SetY(-15);
			$this->SetFont('Arial','I', 8);
			$this->Cell(0,10, 'Pagina '.$this->PageNo().'/{nb}',0,0,'C' );
		}
	}

	/**
	* Reporte de Clientes Inactivos  
	*/
	class Inactivos extends FPDF{
		
		function Header(){

			$this->Image('images/stars.png', 5, 5, 30);
			$this->SetFont('Arial','B',15);
			$this->Cell(30);
			$this->Cell(120,10,utf8_decode( 'Clientes Inactivos'),0,0,'C');
			$this->SetFont('Arial','B',10);
			$this->Cell(50, 10, 'Hoy: '.date('d/m/Y').'', 0);
			$this->Ln(20);
		}

		function Footer(){

			$this->SetY(-15);
			$this->SetFont('Arial','I', 8);
			$this->Cell(0,10, 'Pagina '.$this->PageNo().'/{nb}',0,0,'C' );
		}
	}

	/**
	* Reporte de Clientes Cat Oro  
	*/
	class Oro extends FPDF{
		
		function Header(){

			$this->Image('images/stars.png', 5, 5, 30);
			$this->SetFont('Arial','B',15);
			$this->Cell(30);
			$this->Cell(120,10,utf8_decode( 'Clientes Categoria Oro'),0,0,'C');
			$this->SetFont('Arial','B',10);
			$this->Cell(50, 10, 'Hoy: '.date('d/m/Y').'', 0);
			$this->Ln(20);
		}

		function Footer(){

			$this->SetY(-15);
			$this->SetFont('Arial','I', 8);
			$this->Cell(0,10, 'Pagina '.$this->PageNo().'/{nb}',0,0,'C' );
		}
	}

	/**
	* Reporte de Clientes Cat Plata
	*/
	class Plata extends FPDF{
		
		function Header(){

			$this->Image('images/stars.png', 5, 5, 30);
			$this->SetFont('Arial','B',15);
			$this->Cell(30);
			$this->Cell(120,10,utf8_decode( 'Clientes Categoria Plata'),0,0,'C');
			$this->SetFont('Arial','B',10);
			$this->Cell(50, 10, 'Hoy: '.date('d/m/Y').'', 0);
			$this->Ln(20);
		}

		function Footer(){

			$this->SetY(-15);
			$this->SetFont('Arial','I', 8);
			$this->Cell(0,10, 'Pagina '.$this->PageNo().'/{nb}',0,0,'C' );
		}
	}

	/**
	* Reporte de Clientes Cat Bronce
	*/
	class Bronce extends FPDF{
		
		function Header(){

			$this->Image('images/stars.png', 5, 5, 30);
			$this->SetFont('Arial','B',15);
			$this->Cell(30);
			$this->Cell(120,10,utf8_decode( 'Clientes Categoria Bronce'),0,0,'C');
			$this->SetFont('Arial','B',10);
			$this->Cell(50, 10, 'Hoy: '.date('d/m/Y').'', 0);
			$this->Ln(20);
		}

		function Footer(){

			$this->SetY(-15);
			$this->SetFont('Arial','I', 8);
			$this->Cell(0,10, 'Pagina '.$this->PageNo().'/{nb}',0,0,'C' );
		}
	}

	/**
	* Reporte de Ctalogo de Productos
	*/
	class Productos extends FPDF{
		
		function Header(){

			$this->Image('images/stars.png', 5, 5, 30);
			$this->SetFont('Arial','B',15);
			$this->Cell(30);
			$this->Cell(120,10,utf8_decode( 'Catálogo de Productos'),0,0,'C');
			$this->SetFont('Arial','B',10);
			$this->Cell(50, 10, 'Hoy: '.date('d/m/Y').'', 0);
			$this->Ln(20);

			$this->SetFillColor(232,232,232);
			$this->SetFont('Arial','B',12);
			$this->Cell(25,6,'Cod Barras',1,0,'C',1);
			$this->Cell(80,6,'Nombre',1,0,'C',1);
			$this->Cell(70,6,'Marca',1,0,'C',1);
			$this->Cell(20,6,utf8_decode('Género'),1,0,'C',1);
			$this->Cell(20,6,'Stock',1,0,'C',1);
			$this->Cell(30,6,'Estatus',1,1,'C',1);
		}

		function Footer(){

			$this->SetY(-15);
			$this->SetFont('Arial','I', 8);
			$this->Cell(0,10, 'Pagina '.$this->PageNo().'/{nb}',0,0,'C' );
		}
	}

	/**
	* Reporte de Lista de Precios
	*/
	class Lista extends FPDF{
		
		function Header(){

			$this->Image('images/stars.png', 5, 5, 30);
			$this->SetFont('Arial','B',15);
			$this->Cell(30);
			$this->Cell(120,10,utf8_decode( 'Lista de Precios de Productos'),0,0,'C');
			$this->SetFont('Arial','B',10);
			$this->Cell(50, 10, 'Hoy: '.date('d/m/Y').'', 0);
			$this->Ln(20);

			$this->SetFillColor(232,232,232);
			$this->SetFont('Arial','B',12);
			$this->Cell(175,6,'',0);
			$this->Cell(75,6,"Precios",1,1,'C',1);
			$this->Cell(25,6,'Cod Barras',1,0,'C',1);
			$this->Cell(80,6,'Nombre',1,0,'C',1);
			$this->Cell(70,6,'Marca',1,0,'C',1);
			$this->Cell(25,6,'Oro',1,0,'C',1);
			$this->Cell(25,6,'Plata',1,0,'C',1);
			$this->Cell(25,6,'Bronce',1,1,'C',1);
		}

		function Footer(){

			$this->SetY(-15);
			$this->SetFont('Arial','I', 8);
			$this->Cell(0,10, 'Pagina '.$this->PageNo().'/{nb}',0,0,'C' );
		}
	}

	/**
	* Reporte de Utilidad de Productos
	*/
	class Utilidad extends FPDF{
		
		function Header(){

			$this->Image('images/stars.png', 5, 5, 30);
			$this->SetFont('Arial','B',15);
			$this->Cell(30);
			$this->Cell(120,10,utf8_decode( 'Utilidad de Productos'),0,0,'C');
			$this->SetFont('Arial','B',10);
			$this->Cell(50, 10, 'Hoy: '.date('d/m/Y').'', 0);
			$this->Ln(20);

			$this->SetFillColor(232,232,232);
			$this->SetFont('Arial','B',11);
			$this->Cell(148,6,'',0);
			$this->Cell(40,6,"Oro",1,0,'C',1);
			$this->Cell(40,6,"Plata",1,0,'C',1);
			$this->Cell(40,6,"Bronce",1,1,'C',1);
			$this->SetFont('Arial','B',8);
			$this->Cell(18,6,'Cod Barras',1,0,'L',1);
			$this->SetFont('Arial','B',11);
			$this->Cell(60,6,'Nombre',1,0,'C',1);
			$this->Cell(50,6,'Marca',1,0,'C',1);
			$this->Cell(20,6,'Costo',1,0,'C',1);
			$this->Cell(20,6,'Precio',1,0,'C',1);
			$this->Cell(20,6,'Utilidad',1,0,'C',1);
			$this->Cell(20,6,'Precio',1,0,'C',1);
			$this->Cell(20,6,'Utilidad',1,0,'C',1);
			$this->Cell(20,6,'Precio',1,0,'C',1);
			$this->Cell(20,6,'Utilidad',1,1,'C',1);
		}

		function Footer(){

			$this->SetY(-15);
			$this->SetFont('Arial','I', 8);
			$this->Cell(0,10, 'Pagina '.$this->PageNo().'/{nb}',0,0,'C' );
		}
	}

	/**
	* Reporte de Utilidad de Productos
	*/
	class Hombre extends FPDF{
		
		function Header(){

			$this->Image('images/stars.png', 5, 5, 30);
			$this->SetFont('Arial','B',15);
			$this->Cell(30);
			$this->Cell(120,10,utf8_decode( 'Productos Caballero'),0,0,'C');
			$this->SetFont('Arial','B',10);
			$this->Cell(50, 10, 'Hoy: '.date('d/m/Y').'', 0);
			$this->Ln(20);
		}

		function Footer(){

			$this->SetY(-15);
			$this->SetFont('Arial','I', 8);
			$this->Cell(0,10, 'Pagina '.$this->PageNo().'/{nb}',0,0,'C' );
		}
	}

	class Mujer extends FPDF{
		
		function Header(){

			$this->Image('images/stars.png', 5, 5, 30);
			$this->SetFont('Arial','B',15);
			$this->Cell(30);
			$this->Cell(120,10,utf8_decode( 'Productos Dama'),0,0,'C');
			$this->SetFont('Arial','B',10);
			$this->Cell(50, 10, 'Hoy: '.date('d/m/Y').'', 0);
			$this->Ln(20);
		}

		function Footer(){

			$this->SetY(-15);
			$this->SetFont('Arial','I', 8);
			$this->Cell(0,10, 'Pagina '.$this->PageNo().'/{nb}',0,0,'C' );
		}
	}

	class Nino extends FPDF{
		
		function Header(){

			$this->Image('images/stars.png', 5, 5, 30);
			$this->SetFont('Arial','B',15);
			$this->Cell(30);
			$this->Cell(120,10,utf8_decode( 'Productos Niño'),0,0,'C');
			$this->SetFont('Arial','B',10);
			$this->Cell(50, 10, 'Hoy: '.date('d/m/Y').'', 0);
			$this->Ln(20);
		}

		function Footer(){

			$this->SetY(-15);
			$this->SetFont('Arial','I', 8);
			$this->Cell(0,10, 'Pagina '.$this->PageNo().'/{nb}',0,0,'C' );
		}
	}

	class Nina extends FPDF{
		
		function Header(){

			$this->Image('images/stars.png', 5, 5, 30);
			$this->SetFont('Arial','B',15);
			$this->Cell(30);
			$this->Cell(120,10,utf8_decode( 'Productos Niña'),0,0,'C');
			$this->SetFont('Arial','B',10);
			$this->Cell(50, 10, 'Hoy: '.date('d/m/Y').'', 0);
			$this->Ln(20);
		}

		function Footer(){

			$this->SetY(-15);
			$this->SetFont('Arial','I', 8);
			$this->Cell(0,10, 'Pagina '.$this->PageNo().'/{nb}',0,0,'C' );
		}
	}

	class VentaDiario extends FPDF{
		
		function Header(){

			$this->Image('images/stars.png', 5, 5, 30);
			$this->SetFont('Arial','B',15);
			$this->Cell(30);
			$this->Cell(120,10,utf8_decode( 'Ventas Diario'),0,0,'C');
			$this->SetFont('Arial','B',10);
			$this->Cell(50, 10, 'Hoy: '.date('d/m/Y').'', 0);
			$this->Ln(20);


			$this->SetFillColor(232,232,232);
			$this->SetFont('Arial','B',10);
			$this->Cell(15,6,'Folio',1,0,'C',1);
			$this->Cell(15,6,'Cod Cte',1,0,'C',1);
			$this->Cell(60,6,'Nombre Cte.',1,0,'C',1);
			$this->Cell(25,6,'Fcha. Vta',1,0,'C',1);
			$this->Cell(17,6,'Pago',1,0,'C',1);
			$this->Cell(35,6,'Sub Total',1,0,'C',1);
			$this->Cell(20,6,'Descuento',1,0,'C',1);
			$this->Cell(35,6,'Total',1,0,'C',1);
			$this->SetFont('Arial','B',8);
			$this->Cell(20,6,'Fcha. Liquidar',1,0,'C',1);
			$this->SetFont('Arial','B',10);
			$this->Cell(30,6,'Usuario',1,1,'C',1);
		}

		function Footer(){

			$this->SetY(-15);
			$this->SetFont('Arial','I', 8);
			$this->Cell(0,10, 'Pagina '.$this->PageNo().'/{nb}',0,0,'C' );
		}
	}

	class VentaxFexhas extends FPDF{
		
		function Header(){

			$this->Image('images/stars.png', 5, 5, 30);
			$this->SetFont('Arial','B',15);
			$this->Cell(30);
			$this->Cell(120,10,utf8_decode( 'Ventas'),0,0,'C');
			$this->SetFont('Arial','B',10);
			$this->Ln(20);
		}

		function Footer(){

			$this->SetY(-15);
			$this->SetFont('Arial','I', 8);
			$this->Cell(0,10, 'Pagina '.$this->PageNo().'/{nb}',0,0,'C' );
		}
	}


	class ConsigDiario extends FPDF{
		
		function Header(){

			$this->Image('images/stars.png', 5, 5, 30);
			$this->SetFont('Arial','B',15);
			$this->Cell(30);
			$this->Cell(120,10,utf8_decode( 'Consignación Diario'),0,0,'C');
			$this->SetFont('Arial','B',10);
			$this->Cell(50, 10, 'Hoy: '.date('d/m/Y').'', 0);
			$this->Ln(20);

			$this->SetFillColor(232,232,232);
			$this->SetFont('Arial','B',10);
			$this->Cell(15,6,'Folio',1,0,'C',1);
			$this->Cell(15,6,'Cod Cte',1,0,'C',1);
			$this->Cell(60,6,'Nombre Cte.',1,0,'C',1);
			$this->Cell(25,6,'Fcha. Consig',1,0,'C',1);
			$this->Cell(17,6,'Pago',1,0,'C',1);
			$this->Cell(35,6,'Sub Total',1,0,'C',1);
			$this->Cell(20,6,'Descuento',1,0,'C',1);
			$this->Cell(35,6,'Total',1,0,'C',1);
			$this->SetFont('Arial','B',8);
			$this->Cell(20,6,'Fcha. Liquidar',1,0,'C',1);
			$this->SetFont('Arial','B',10);
			$this->Cell(30,6,'Usuario',1,1,'C',1);
		}

		function Footer(){

			$this->SetY(-15);
			$this->SetFont('Arial','I', 8);
			$this->Cell(0,10, 'Pagina '.$this->PageNo().'/{nb}',0,0,'C' );
		}
	}

	class ConsigSaldo extends FPDF{
		
		function Header(){

			$this->Image('images/stars.png', 5, 5, 30);
			$this->SetFont('Arial','B',15);
			$this->Cell(30);
			$this->Cell(120,10,utf8_decode( 'Consignaciónes con Saldo Pendiente'),0,0,'C');
			$this->SetFont('Arial','B',10);
			$this->Cell(50, 10, 'Hoy: '.date('d/m/Y').'', 0);
			$this->Ln(20);


			$this->SetFillColor(232,232,232);
			$this->SetFont('Arial','B',10);
			$this->Cell(25,6,'Fcha. Consig',1,0,'C',1);
			$this->Cell(15,6,'Folio',1,0,'C',1);
			$this->Cell(15,6,'Cod Cte',1,0,'C',1);
			$this->Cell(70,6,'Nombre Cte.',1,0,'C',1);
			$this->Cell(30,6,'Total',1,0,'C',1);
			$this->Cell(30,6,'Pago',1,0,'C',1);
			$this->Cell(30,6,'Saldo',1,0,'C',1);
			$this->Cell(35,6,'Fcha. Liquidar',1,1,'C',1);
	
		}

		function Footer(){

			$this->SetY(-15);
			$this->SetFont('Arial','I', 8);
			$this->Cell(0,10, 'Pagina '.$this->PageNo().'/{nb}',0,0,'C' );
		}
	}

	class Gastos extends FPDF{
		
		function Header(){

			$this->Image('images/stars.png', 5, 5, 30);
			$this->SetFont('Arial','B',15);
			$this->Cell(30);
			$this->Cell(120,10,utf8_decode( 'Historial de Gastos'),0,0,'C');
			$this->SetFont('Arial','B',10);
			$this->Cell(50, 10, 'Hoy: '.date('d/m/Y').'', 0);
			$this->Ln(20);

			$this->SetFillColor(232,232,232);
			$this->SetFont('Arial','B',12);
			$this->Cell(15,6,'Folio',1,0,'C',1);
			$this->Cell(20,6,'Fecha',1,0,'C',1);
			$this->Cell(120,6,'Concepto',1,0,'C',1);
			$this->Cell(30,6,'Monto',1,0,'C',1);
			$this->Cell(30,6,'Usuario',1,1,'C',1);
		}

		function Footer(){

			$this->SetY(-15);
			$this->SetFont('Arial','I', 8);
			$this->Cell(0,10, 'Pagina '.$this->PageNo().'/{nb}',0,0,'C' );
		}
	}







/**
	* Reporte de Ctalogo de Productos
	*/
	class Productosshopping extends FPDF{
		
		function Header(){

			$this->Image('images/stars.png', 5, 5, 30);
			$this->SetFont('Arial','B',15);
			$this->Cell(30);
			$this->Cell(120,10,utf8_decode('Productos'),0,0,'C');
			$this->Cell(80,6, 'Desde: '.$_GET['desde'].' 		Hasta: '.$_GET['hasta'],0,1);
			$this->SetFont('Arial','B',10);
			//$this->Cell(50, 10, 'Hoy: '.date('d/m/Y').'', 0);
			$this->Ln(20);

			$this->SetFillColor(232,232,232);
			$this->SetFont('Arial','B',12);
			$this->Cell(40,6,'Cod Barras',1,0,'C',1);
			$this->Cell(150,6,'Nombre',1,0,'C',1);
			$this->Cell(70,6,'Marca',1,0,'C',1);
			$this->Cell(35,6,utf8_decode('Precio'),1,0,'C',1);
			$this->Cell(35,6,'Precio sin des.',1,0,'C',1);
			$this->Cell(15,6,'Stock',1,1,'C',1);
		}

		function Footer(){

			$this->SetY(-15);
			$this->SetFont('Arial','I', 8);
			$this->Cell(0,10, 'Pagina '.$this->PageNo().'/{nb}',0,0,'C' );
		}
	}
/**
	* Reporte de Ctalogo de Productos
	*/
	class Pedidosshopping extends FPDF{
		
		function Header(){

			$this->Image('images/stars.png', 5, 5, 30);
			$this->SetFont('Arial','B',15);
			$this->Cell(30);
			$this->Cell(120,10,utf8_decode('Pedidos'),0,0,'C');
			$this->SetFont('Arial','B',10);
			$this->Cell(50, 10, utf8_decode('Hoy: '.date('d/m/Y').''), 0);
			$this->Ln(20);

			$this->SetFillColor(232,232,232);
			$this->SetFont('Arial','B',12);
			$this->Cell(40,6,utf8_decode('Nombre'),1,0,'C',1);
			$this->Cell(50,6,utf8_decode('Direccion'),1,0,'C',1);
			$this->Cell(70,6,utf8_decode('Provincia'),1,0,'C',1);
			$this->Cell(35,6,utf8_decode('Ciudad'),1,0,'C',1);
			$this->Cell(35,6,'C.P.',1,0,'C',1);
			$this->Cell(30,6,utf8_decode('id pedido'),1,0,'C',1);
			$this->Cell(30,6,'Precio producto',1,0,'C',1);
			$this->Cell(30,6,utf8_decode('Cantidad'),1,0,'C',1);
			$this->Cell(30,6,utf8_decode('Total'),1,1,'C',1);
			
		}

		function Footer(){

			$this->SetY(-15);
			$this->SetFont('Arial','I', 8);
			$this->Cell(0,10, 'Pagina '.$this->PageNo().'/{nb}',0,0,'C' );
		}
	}
/**
	* Reporte de Ctalogo de Productos
	*/
	class Pedidoshoyshopping extends FPDF{
		
		function Header(){

			$this->Image('images/stars.png', 5, 5, 30);
			$this->SetFont('Arial','B',15);
			$this->Cell(30);
			$this->Cell(120,10,utf8_decode( 'Pedidos Hoy'),0,0,'C');
			$this->SetFont('Arial','B',10);
			$this->Cell(50, 10, utf8_decode('Hoy: '.date('d/m/Y')).'', 0);
			$this->Ln(20);

			$this->SetFillColor(232,232,232);
			$this->SetFont('Arial','B',12);
			$this->Cell(50,6,utf8_decode('Nombre usuario'),1,0,'C',1);
			$this->Cell(50,6,utf8_decode('Email'),1,0,'C',1);
			$this->Cell(80,6,utf8_decode('Dirección de envío'),1,0,'C',1);
			$this->Cell(70,6,utf8_decode('Producto'),1,0,'C',1);
			$this->Cell(35,6,utf8_decode('Cantidad'),1,0,'C',1);
			$this->Cell(30,6,utf8_decode('Monto total'),1,0,'C',1);
			$this->Cell(30,6,utf8_decode('Fecha pedido'),1,1,'C',1);
		
		
		
		}

		function Footer(){

			$this->SetY(-15);
			$this->SetFont('Arial','I', 8);
			$this->Cell(0,10, 'Pagina '.$this->PageNo().'/{nb}',0,0,'C' );
		}
	}

	/**
	* Reporte de Ctalogo de Productos
	*/
	class Productosfavoritosshopping extends FPDF{
		
		function Header(){

			$this->Image('images/stars.png', 5, 5, 30);
			$this->SetFont('Arial','B',15);
			$this->Cell(30);
			$this->Cell(120,10,utf8_decode('Productos'),0,0,'C');
			$this->SetFont('Arial','B',10);
			$this->Cell(50, 10, 'Hoy: '.date('d/m/Y').'', 0);
			$this->Ln(20);

			$this->SetFillColor(232,232,232);
			$this->SetFont('Arial','B',12);
			$this->Cell(40,6,'Cod Barras',1,0,'C',1);
			$this->Cell(150,6,'Nombre',1,0,'C',1);
			$this->Cell(70,6,'Marca',1,0,'C',1);
			$this->Cell(35,6,utf8_decode('Precio'),1,0,'C',1);
			$this->Cell(35,6,'Precio sin des.',1,0,'C',1);
			$this->Cell(15,6,'Imagen',1,1,'C',1);
		}

		function Footer(){

			$this->SetY(-15);
			$this->SetFont('Arial','I', 8);
			$this->Cell(0,10, 'Pagina '.$this->PageNo().'/{nb}',0,0,'C' );
		}
	}
	/**
	* Reporte de Ctalogo de Productos
	*/
	class Catshopping extends FPDF{
		
		function Header(){

			$this->Image('images/stars.png', 5, 5, 30);
			$this->SetFont('Arial','B',15);
			$this->Cell(30);
			$this->Cell(120,10,utf8_decode( 'Categoria Hoy'),0,0,'C');
			$this->SetFont('Arial','B',10);
			$this->Cell(50, 10, utf8_decode('Hoy: '.date('d/m/Y')).'', 0);
			$this->Ln(20);

			$this->SetFillColor(232,232,232);
			$this->SetFont('Arial','B',12);
			$this->Cell(50,6,utf8_decode('Id Categoria'),1,0,'C',1);
			$this->Cell(50,6,utf8_decode('Nombre'),1,0,'C',1);
			$this->Cell(80,6,utf8_decode('Descripcion'),1,0,'C',1);
			$this->Cell(70,6,utf8_decode('Fecha creacion'),1,0,'C',1);
			$this->Cell(95,6,utf8_decode('Fecha de actualizacion'),1,0,'C',1);
			//$this->Cell(30,6,utf8_decode('Monto total'),1,0,'C',1);
		//	$this->Cell(30,6,utf8_decode('Fecha pedido'),1,1,'C',1);
		
		
		
		}

		function Footer(){

			$this->SetY(-15);
			$this->SetFont('Arial','I', 8);
			$this->Cell(0,10, 'Pagina '.$this->PageNo().'/{nb}',0,0,'C' );
		}
	}


	/**
	* Reporte de Ctalogo de Productos
	*/
	class Subcatshopping extends FPDF{
		
		function Header(){

			$this->Image('images/stars.png', 5, 5, 30);
			$this->SetFont('Arial','B',15);
			$this->Cell(30);
			$this->Cell(120,10,utf8_decode( 'Sub-Categoria Hoy'),0,0,'C');
			$this->SetFont('Arial','B',10);
			$this->Cell(50, 10, utf8_decode('Hoy: '.date('d/m/Y')).'', 0);
			$this->Ln(20);

			$this->SetFillColor(232,232,232);
			$this->SetFont('Arial','B',12);
			$this->Cell(50,6,utf8_decode('Id Sub-Categoria'),1,0,'C',1);
			
			$this->Cell(50,6,utf8_decode('Cod categoria'),1,0,'C',1);
			$this->Cell(80,6,utf8_decode('Nombre'),1,0,'C',1);
			//$this->Cell(80,6,utf8_decode('Descripcion'),1,0,'C',1);
			$this->Cell(70,6,utf8_decode('Fecha creacion'),1,0,'C',1);
			$this->Cell(95,6,utf8_decode('Fecha de actualizacion'),1,1,'C',1);
		//	$this->Cell(30,6,utf8_decode('Fecha pedido'),1,1,'C',1);
		
		
		
		}

		function Footer(){

			$this->SetY(-15);
			$this->SetFont('Arial','I', 8);
			$this->Cell(0,10, 'Pagina '.$this->PageNo().'/{nb}',0,0,'C' );
		}
	}


		/**
	* Reporte de Ctalogo de Productos
	*/
	class Usuariosshopping extends FPDF{
		
		function Header(){

			$this->Image('images/stars.png', 5, 5, 30);
			$this->SetFont('Arial','B',15);
			$this->Cell(30);
			$this->Cell(120,10,utf8_decode( 'Usuarios Hoy'),0,0,'C');
			$this->SetFont('Arial','B',10);
			$this->Cell(50, 10, utf8_decode('Hoy: '.date('d/m/Y')).'', 0);
			$this->Ln(20);

			$this->SetFillColor(232,232,232);
			$this->SetFont('Arial','B',12);
			$this->Cell(50,6,utf8_decode('Id Usuario'),1,0,'C',1);
			
			//$this->Cell(50,6,utf8_decode('Cod categoria'),1,0,'C',1);
			$this->Cell(50,6,utf8_decode('Nombre'),1,0,'C',1);
			$this->Cell(50,6,utf8_decode('Numero de contacto'),1,0,'C',1);
			$this->Cell(50,6,utf8_decode('Email'),1,0,'C',1);
			
			$this->Cell(145,6,utf8_decode('Direccion'),1,1,'C',1);
		//	$this->Cell(30,6,utf8_decode('Fecha pedido'),1,1,'C',1);
		
		
		
		}

		function Footer(){

			$this->SetY(-15);
			$this->SetFont('Arial','I', 8);
			$this->Cell(0,10, 'Pagina '.$this->PageNo().'/{nb}',0,0,'C' );
		}

	}
/**
	* Reporte de Ctalogo de Productos
	*/
	class Pedidospendientesshopping extends FPDF{
		
		function Header(){

			$this->Image('images/stars.png', 5, 5, 30);
			$this->SetFont('Arial','B',15);
			$this->Cell(30);
			$this->Cell(120,10,utf8_decode( 'Pedidos Hoy'),0,0,'C');
			$this->SetFont('Arial','B',10);
			$this->Cell(50, 10, utf8_decode('Hoy: '.date('d/m/Y')).'', 0);
			$this->Ln(20);

			$this->SetFillColor(232,232,232);
			$this->SetFont('Arial','B',12);
			$this->Cell(50,6,utf8_decode('Nombre usuario'),1,0,'C',1);
			$this->Cell(50,6,utf8_decode('Email'),1,0,'C',1);
			$this->Cell(80,6,utf8_decode('Dirección de envío'),1,0,'C',1);
			$this->Cell(70,6,utf8_decode('Producto'),1,0,'C',1);
			$this->Cell(35,6,utf8_decode('Cantidad'),1,0,'C',1);
			$this->Cell(30,6,utf8_decode('Monto total'),1,0,'C',1);
			$this->Cell(30,6,utf8_decode('Fecha pedido'),1,1,'C',1);
		
		
		
		}

		function Footer(){

			$this->SetY(-15);
			$this->SetFont('Arial','I', 8);
			$this->Cell(0,10, 'Pagina '.$this->PageNo().'/{nb}',0,0,'C' );
		}
	}

/**
	* Reporte de Ctalogo de Productos
	*/
	class Pedidosentregadosshopping extends FPDF{
		
		function Header(){

			$this->Image('images/stars.png', 5, 5, 30);
			$this->SetFont('Arial','B',15);
			$this->Cell(30);
			$this->Cell(120,10,utf8_decode( 'Pedidos Hoy'),0,0,'C');
			$this->SetFont('Arial','B',10);
			$this->Cell(50, 10, utf8_decode('Hoy: '.date('d/m/Y')).'', 0);
			$this->Ln(20);

			$this->SetFillColor(232,232,232);
			$this->SetFont('Arial','B',12);
			$this->Cell(50,6,utf8_decode('Nombre usuario'),1,0,'C',1);
			$this->Cell(50,6,utf8_decode('Email'),1,0,'C',1);
			$this->Cell(80,6,utf8_decode('Dirección de envío'),1,0,'C',1);
			$this->Cell(70,6,utf8_decode('Producto'),1,0,'C',1);
			$this->Cell(35,6,utf8_decode('Cantidad'),1,0,'C',1);
			$this->Cell(30,6,utf8_decode('Monto total'),1,0,'C',1);
			$this->Cell(30,6,utf8_decode('Fecha pedido'),1,1,'C',1);
		
		
		
		}

		function Footer(){

			$this->SetY(-15);
			$this->SetFont('Arial','I', 8);
			$this->Cell(0,10, 'Pagina '.$this->PageNo().'/{nb}',0,0,'C' );
		}
	}
	
?>