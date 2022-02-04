<?php require_once 'php_action/core.php'; ?>
<!DOCTYPE html>
<html>
<head>

	<title>TIENDA</title>

	<!-- bootstrap -->
	<link rel="stylesheet" href="assests/bootstrap/css/bootstrap.min.css">
	<!-- bootstrap theme-->
	<link rel="stylesheet" href="assests/bootstrap/css/bootstrap-theme.min.css">
	<!-- font awesome -->
	<link rel="stylesheet" href="assests/font-awesome/css/font-awesome.min.css">

  <!-- custom css -->
  <link rel="stylesheet" href="custom/css/custom.css">

	<!-- DataTables -->
  <link rel="stylesheet" href="assests/plugins/datatables/jquery.dataTables.min.css">

  <!-- file input -->
  <link rel="stylesheet" href="assests/plugins/fileinput/css/fileinput.min.css">

  <!-- jquery -->
	<script src="assests/jquery/jquery.min.js"></script>
  <!-- jquery ui -->  
  <link rel="stylesheet" href="assests/jquery-ui/jquery-ui.min.css">
  <script src="assests/jquery-ui/jquery-ui.min.js"></script>

  <!-- bootstrap js -->
	<script src="assests/bootstrap/js/bootstrap.min.js"></script>

<!-- Alertify -->
  <script src="assests/alertify/js/alertify.min.js"></script>
  <link rel="stylesheet" href="assests/alertify/themes/alertify.core.css">
  <link rel="stylesheet" href="assests/alertify/themes/alertify.default.css">

  <!-- bootstrap js 
  <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>-->


</head>



<!-- MODAL -->
<div id="ModalEnd" data-backdrop="static" data-keyboard="false" class="modal fade">  
  <div class="modal-dialog ">  
      <div class="modal-content"> 
          <div class="modal-header">  
                <button type="button" class="close" data-dismiss="modal">&times;</button>  
                <h4 class="modal-title">Cerrar Sesión</h4>  
          </div>  
          <div class="modal-body" id="">  

			<div class="row" class="col-sm-6 col-md-4">
				<center><img  src="assests/images/admiracion.png"  height="250"></center>
			    <p class="text-info text-center">¿ ESTAS SEGURO DE SALIR DEL SISTEMA ?</p>
				
			</div>

          </div>  

          <div class="modal-footer">  
          	  <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
              <a href="cerrar_sesion.php" ><button type="button" class="btn btn-success" >Aceptar</button></a>
          </div>  
      </div>  
  </div>  
</div>
<!--End Modal -->

<div class="container">

