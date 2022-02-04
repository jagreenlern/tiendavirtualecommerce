<?php 
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['login'])==0)
    {   
header('location:login.php');
}
else{
	if (isset($_POST['submit'])) {

		mysqli_query($con,"update orders set 	paymentMethod='".$_POST['paymethod']."' where userId='".$_SESSION['id']."' and paymentMethod is null ");
		unset($_SESSION['cart']);
		header('location:order-history.php');

	}
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<!-- Meta -->
		<meta charset="utf-8">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		<meta name="description" content="">
		<meta name="author" content="">
	    <meta name="keywords" content="MediaCenter, Template, eCommerce">
	    <meta name="robots" content="all">

	    <title>Tienda Virtual | Método de Pago</title>
	    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
	    <link rel="stylesheet" href="assets/css/main.css">
	    <link rel="stylesheet" href="assets/css/green.css">
	    <link rel="stylesheet" href="assets/css/owl.carousel.css">
		<link rel="stylesheet" href="assets/css/owl.transitions.css">
		<!--<link rel="stylesheet" href="assets/css/owl.theme.css">-->
		<link href="assets/css/lightbox.css" rel="stylesheet">
		<link rel="stylesheet" href="assets/css/animate.min.css">
		<link rel="stylesheet" href="assets/css/rateit.css">
		<link rel="stylesheet" href="assets/css/bootstrap-select.min.css">
		<link rel="stylesheet" href="assets/css/config.css">
		<link href="assets/css/green.css" rel="alternate stylesheet" title="Green color">
		<link href="assets/css/blue.css" rel="alternate stylesheet" title="Blue color">
		<link href="assets/css/red.css" rel="alternate stylesheet" title="Red color">
		<link href="assets/css/orange.css" rel="alternate stylesheet" title="Orange color">
		<link href="assets/css/dark-green.css" rel="alternate stylesheet" title="Darkgreen color">
		<link rel="stylesheet" href="assets/css/font-awesome.min.css">
		<link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
		<link rel="shortcut icon" href="assets/images/favicon.ico">
	</head>
    <body class="cnt-home">
	
		
<header class="header-style-1">
<?php include('includes/top-header.php');?>
<?php include('includes/main-header.php');?>
<?php include('includes/menu-bar.php');?>
</header>
<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="home.html">Inicio</a></li>
				<li class='active'>Método de Pago</li>
			</ul>
		</div><!-- /.breadcrumb-inner -->
	</div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="body-content outer-top-bd">
	<div class="container">
		<div class="checkout-box faq-page inner-bottom-sm">
			<div class="row">
				<div class="col-md-12">
					<h2>Elija un método de pago</h2>
					<div class="panel-group checkout-steps" id="accordion">
						<!-- checkout-step-01  -->
<div class="panel panel-default checkout-step-01">

	<!-- panel-heading -->
		<div class="panel-heading" >
    	<h4 class="unicase-checkout-title">
	        <a data-toggle="collapse" class="" data-parent="#accordion" href="#collapseOne">
	         Seleccione tipo de pago
	        </a>
	     </h4>
    </div>
    <!-- panel-heading -->

	<div id="collapseOne" class="panel-collapse collapse in">

		<!-- panel-body  -->
	    <div class="panel-body">
	    <form name="payment" method="post">
	    <select name="paymethod" >
		 
		<option name="paymethod" value="alcontado">Al contado</option>
	    <option name="paymethod" value="alcontadosw">Al contado(Enviar dinero con Small World)</option>
	     <ption" name="paymethod" value="tarjetacreditodebito">Tarjeta de credito o debito</option>

		 <option name="paymethod" value="paypal">Paypal</option>
		 <option name="paymethod" value="kutxabank">Kutxabank</option>
		 <option name="paymethod" value="stripe">Stripe</option>
		 <option name="paymethod" value="contrarembolso">Contrarembolso</option>
		 <option name="paymethod" value="transferenciabancariacc">Transferencia bancaria(Cuenta corriente)</option>
		 <option name="paymethod" value="transferenciabancariat">Transferencia bancaria(Tarjeta)</option>
		 
		 
		 
		 <option name="paymethod" value="ingresobancario">Ingreso Bancario(recibo)</option>
		 <option name="paymethod" value="mensualidades">Mensualidades(Transferencia bancaria)</option>
		 <option name="paymethod" value="bimestral">Bimestral(Transferencia bancaria)</option>
		 <option name="paymethod" value="trimestral">Trimestral(Transferencia bancaria)</option>
		 <option name="paymethod" value="anual">Anual(Transferencia bancaria)</option>
		  
		 
		 
		 
		 </select><br /><br />	
	     <input type="submit" value="CONTINUAR" name="submit" class="btn btn-primary">
	    	

	    </form>		
		</div>
		<!-- panel-body  -->
	



<p >Cada vez existen más formas de <strong>enviar dinero</strong> de una persona a otra. Decantarse por un determinado <strong>método de pago</strong> depende mucho de tus necesidades y de las de tu beneficiario, no obstante te recomendamos que siempre compares <strong>la tasa de cambio</strong> que te ofrecen para <strong>transferencias internacionales</strong> así como <strong>la comisión</strong> que te cobran por el servicio.</p>
<p>Estos son los <strong>métodos de pago más habituales</strong>:</p>
<p >Cuenta corriente de la empresa:<strong>47438787343</strong></p>

<p style="margin-left: 40px;"><strong>- Pago con Tarjeta Crédito / Débito</strong></p>

<p style="margin-left: 40px;">Te permite realizar una <strong>transferencia online</strong> con los dígitos de tu <strong>tarjeta de crédito o débito</strong>. Para realizar una transferencia con este método de pago con <strong>Small World</strong>: entra en <a href="https://transactional.smallworldfs.com/es-es/registersw" class="link"><i class="label">www.smallworldfs.com</i></a>, regístrate, elije el país donde quieres enviar y la cantidad de dinero y escoge como método de pago tarjeta de débito/crédito. Posteriormente, introduce los datos de tu beneficiario y en pocos minutos habrás <strong>enviado tu dinero</strong>.</p>


<p style="margin-left: 40px;"><strong>- Transferencia Bancaria</strong></p>

<p style="margin-left: 40px;">Se crea una orden con la cantidad que deseamos enviar al beneficiario. Una vez confirmada la orden, se hace una transferencia bancaria a la cuenta de Small World en el mismo país de origen y por la misma cantidad exacta que se hizo la orden, sin olvidar incluir el número de orden en el concepto. Una vez llegue el dinero a la cuenta de Small World, lo enviarán al pagador entre 24 y 48 horas.</p>

<p style="margin-left: 40px;">Puede tratarse de un proceso un poco más lento pero da un mayor grado de seguridad ya que permite la identificación bancaria, algo obligatorio al menos una vez para cada persona en España que realice transacciones no personales.</p>


<p style="margin-left: 40px;"><strong>- Ingreso Bancario(Recibo)</strong></p>




<p style="margin-left: 40px;"><strong><a href='https://www.smallworldfs.com/es	' target='_blank' id='#16' name='' class="btn btn-info" role="button"><i class='icon-money icon-large'></i>contado(Enviar dinero con Small World)</a></strong></p>

<p style="margin-left: 40px;"><strong>Envío de dinero en efectivo a un tercero</strong>. <strong>Small World</strong> cuenta con 162 oficinas en 19 países para que puedas realizar <strong>tu envío de dinero en efectivo de manera rápida y sencilla</strong>. Puedes consultar el <a href="https://www.smallworldfs.com/es/donde-estamos" target="_blank" class="link"><i class="label">mapa de oficinas</i></a>.</p>
<p style="margin-left: 40px;"><strong><a href='https://www.paypal.com/paypalme/pagarapablo' target='_blank' id='#16' name='' class="btn btn-info" role="button"><i class='icon-money icon-large'></i>Paypal</a></strong></p>
<p style="margin-left: 40px;">Es una <strong>herramienta online</strong> que permite realizar <strong>pagos por internet</strong>. Tan sólo tendrás que <strong>introducir los dígitos de tu tarjeta de débito/crédito una vez</strong> y posteriormente, puedes realizar tus pagos con tu cuenta de correo electrónico y tu contraseña. Aunque suele ser un servicio rápido, las desventaja radica en que <strong>la tasa de cambio suele ser muy alta y poco competitiva</strong>. Sin embargo sí garantiza <strong>la seguridad a la hora de realizar compras en internet</strong> en sitios desconocidos.</p>







<a href="https://portal.kutxabank.es/cs/Satellite/kb/es/particulares" target="_blank" id="#16"class="btn btn-info" role="button" name=""><i class="icon-money icon-large"></i>kutxabank</a>
		<a href='stripepagostarjeta/index.php?cantidad=0&descripcion=Productos Pablo Martín Martín' class="btn btn-info" role="button" name=''><i class='icon-money icon-large'></i>Stripe</a>		


		






	</div><!-- row -->
</div>
<!-- checkout-step-01  -->
					  
					  	
					</div><!-- /.checkout-steps -->
				</div>
			</div><!-- /.row -->
		</div><!-- /.checkout-box -->
		<!-- ============================================== BRANDS CAROUSEL ============================================== -->
<?php echo include('includes/brands-slider.php');?>
<!-- ============================================== BRANDS CAROUSEL : END ============================================== -->	</div><!-- /.container -->
</div><!-- /.body-content -->
<?php include('includes/footer.php');?>
	<script src="assets/js/jquery-1.11.1.min.js"></script>
	
	<script src="assets/js/bootstrap.min.js"></script>
	
	<script src="assets/js/bootstrap-hover-dropdown.min.js"></script>
	<script src="assets/js/owl.carousel.min.js"></script>
	
	<script src="assets/js/echo.min.js"></script>
	<script src="assets/js/jquery.easing-1.3.min.js"></script>
	<script src="assets/js/bootstrap-slider.min.js"></script>
    <script src="assets/js/jquery.rateit.min.js"></script>
    <script type="text/javascript" src="assets/js/lightbox.min.js"></script>
    <script src="assets/js/bootstrap-select.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
	<script src="assets/js/scripts.js"></script>

	<!-- For demo purposes – can be removed on production -->
	
	<script src="switchstylesheet/switchstylesheet.js"></script>
	
	<script>
		$(document).ready(function(){ 
			$(".changecolor").switchstylesheet( { seperator:"color"} );
			$('.show-theme-options').click(function(){
				$(this).parent().toggleClass('open');
				return false;
			});
		});

		$(window).bind("load", function() {
		   $('.show-theme-options').delay(2000).trigger('click');
		});
	</script>
	<!-- For demo purposes – can be removed on production : End -->

	

</body>
</html>
<?php } ?>