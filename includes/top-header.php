<?php 
//session_start();

?>
<style>
body {
  background-image: url('img/fondo.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: 100% 100%;
}
</style>

<div class="top-bar animate-dropdown">
	<div class="container">
		<div class="header-top-inner">
			<div class="cnt-account">
				<ul class="list-unstyled" style>

<?php if(strlen($_SESSION['login']))
    {   ?>
<p>
				<li><a href="#"><i class="icon fa fa-user"></i>Bienvenido -<?php echo htmlentities($_SESSION['username']);?></a></li>
				<?php } ?>

					<li><a href="my-account.php"><i class="icon fa fa-user"></i>Mi cuenta</a></li>
					
					<!--<li><a href="#" onclick="window.print()"><i class="icon fa fa-print"></i>Imprimir</a>-->
					<li><a href="my-wishlist.php"><i class="icon fa fa-star"></i>Mis favoritos</a></li>
					<li><a href="order-history.php"><i class="order-history.php"></i>Seguimiento de pedidos</a></li>
					<li><a href="admin/"><i class="icon fa fa-key"></i>Admin</a></li>-->
				<!--
					
						<li><a href="my-account.php" class="btn btn-default btn-lg">
          <span class="glyphicon glyphicon-user"></span>Mi cuenta</a></li>
		  <li><a href="my-wishlist.php" class="btn btn-default btn-lg">
          <span class="glyphicon glyphicon-heart-empty"></span>Productos favoritos</a></li>
					<li><a href="admin/" class="btn btn-default btn-lg">
          <span class="glyphicon glyphicon-shopping-cart"></span>Carrito</a></li><

		
	
		  <li><a href="track-orders.php" class="btn btn-default btn-lg">
          <span class="glyphicon glyphicon-zoom-in"></span>Revisa pedido</a></li>
		  <li><a href="admin/" class="btn btn-default btn-lg">
          <span class="glyphicon glyphicon-wrench"></span>Administración</a></li>	-->
        
					<?php if(strlen($_SESSION['login'])==0)
    {   ?>
<li><a href="login.php"><i class="icon fa fa-sign-in"></i>Iniciar sesión</a></li>
<!--<li><a href="admin/" class="btn btn-default btn-lg">
          <span class="glyphicon glyphicon-edit"></span>Login</a></li>-->
<?php }
else{ ?>
	
				<li><a href="logout.php"><i class="icon fa fa-sign-out"></i>Cerrar sesión</a></li>
				<?php } ?>
					<li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#change-colors" aria-expanded="false">Colores</a>

                                <ul class="dropdown-menu" role="menu">
                                    <li role="presentation"><a role="menuitem" class="changecolor green-text" tabindex="-1" href="#" title="Green color">Verde</a></li>
                                    <li role="presentation"><a role="menuitem" class="changecolor blue-text" tabindex="-1" href="#" title="Blue color">Azul</a></li>
                                    <li role="presentation"><a role="menuitem" class="changecolor orange-text" tabindex="-1" href="#" title="Orange color">Naranja</a></li>
									<li role="presentation"><a role="menuitem" class="changecolor red-text" tabindex="-1" href="#" title="Red color">Rojo</a></li>                                    
                                    <li role="presentation"><a role="menuitem" class="changecolor navy-text" tabindex="-1" href="#" title="Navy color">Militar</a></li>
                                    <li role="presentation"><a role="menuitem" class="changecolor dark-green-text" tabindex="-1" href="#" title="Darkgreen color">Verde</a></li>
                                </ul>
                            </li>
				</ul>
			</div><!-- /.cnt-account -->
			
<div class="cnt-block">
				<ul class="list-unstyled list-inline">
					<li class="dropdown dropdown-small">
						<a href="order-history.php" class="dropdown-toggle" ><span class="key">Seguimiento de pedidos</b></a>
						
					</li>

				
				</ul>
			</div>
			</p>	
			<div class="clearfix"></div>
		</div><!-- /.header-top-inner -->
	</div><!-- /.container -->
</div><!-- /.header-top -->
