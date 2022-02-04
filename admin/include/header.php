<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
					<i class="icon-reorder shaded"></i>
				</a>

			  	<a class="brand" href="index.html">
			  		Tienda Virtual  | Admin
			  	</a>

				<div class="nav-collapse collapse navbar-inverse-collapse">
					<ul class="nav pull-right">
						<li><a href="#">
							Admin
						</a></li>
						<li class="nav-user dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<img src="images/user.png" class="nav-avatar" />
								<b class="caret">Menu</b>
							</a>
							<ul class="dropdown-menu">
								<li><a class="menu-icon icon-user" href="change-password.php">Cambiar contraseña</a></li>

								<li>
								<a href="logout.php">
									<i class="menu-icon icon-signout"></i>
									Cerrar Sesión
								</a>
								</li>
								<li class="divider"></li>

								<li>
										<a href="todays-orders.php">
											<i class="icon-tasks"></i>
											Ped. de hoy
  <?php
  $f1="00:00:00";
$from=date('Y-m-d')." ".$f1;
$t1="23:59:59";
$to=date('Y-m-d')." ".$t1;
 $result = mysqli_query($con,"SELECT * FROM Orders where orderDate Between '$from' and '$to'");
$num_rows1 = mysqli_num_rows($result);
{
?>
											<b class="label orange pull-right"><?php echo htmlentities($num_rows1); ?></b>
											<?php } ?>
										</a>
									</li>
									<li>
										<a href="pending-orders.php">
											<i class="icon-tasks"></i>
											Ped. pendientes
										<?php	
	$status='Entregado';									 
$ret = mysqli_query($con,"SELECT * FROM Orders where orderStatus not like '%$status%' or orderStatus is null ");
$num = mysqli_num_rows($ret);
{?><b class="label orange pull-right"><?php echo htmlentities($num); ?></b>
<?php } ?>
										</a>
									</li>
									<li>
										<a href="delivered-orders.php">
											<i class="icon-inbox"></i>
											Ped. entregados
								<?php	
	$status='Entregado';									 
$rt = mysqli_query($con,"SELECT * FROM Orders where orderStatus like '%$status%'");
$num1 = mysqli_num_rows($rt);
{?><b class="label green pull-right"><?php echo htmlentities($num1); ?></b>
<?php } ?>

										</a>
									</li>
								
							</li>
							
							<li>
								<a href="manage-users.php">
									<i class="menu-icon icon-group"></i>
									Administrar usuarios
								</a>
							</li>

							<li><a href="category.php"><i class="menu-icon icon-tasks"></i> Crear Categoria </a></li>
                                <li><a href="subcategory.php"><i class="menu-icon icon-tasks"></i>Sub Categoria </a></li>
                                <li><a href="insert-product.php"><i class="menu-icon icon-paste"></i>Insertar Producto </a></li>
                                <li><a href="manage-products.php"><i class="menu-icon icon-table"></i>Administrar Productos </a></li>
								<li><a href="reportes.php"><i class="menu-icon icon-table"></i>Reportes </a></li>
								
								<li><a href="graficas.php"><i class="menu-icon icon-table"></i>Graficas </a></li>









							</ul>
						</li>
					</ul>
				</div><!-- /.nav-collapse -->
			</div>
		</div><!-- /navbar-inner -->
	</div><!-- /navbar -->
