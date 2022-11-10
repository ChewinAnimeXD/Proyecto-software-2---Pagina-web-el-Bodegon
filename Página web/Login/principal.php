<?php
	
	session_start();
	
	if(!isset($_SESSION['id'])){
		header("Location: index.php");
	}
	
	$nombre = $_SESSION['nombre'];
	$tipo_usuario = $_SESSION['tipo_usuario'];
	
	
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Menu Usuario - Bodegon</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
		<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
	</head>
    <body class="sb-nav-fixed" >
        <nav class="sb-topnav navbar navbar-expand navbar-dark " style="background-color:#B17B00;">
            <a class="navbar-brand"  href="index.html">Menu Usuario</a><button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <ul class="navbar-nav ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $nombre; ?><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">Configuración</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="logout.php">Salir</a>
					</div>
				</li>
			</ul>
		</nav>
        <div id="layoutSidenav" >
            <div id="layoutSidenav_nav" >
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion" style="background-color:#28241C;">
                    <div class="sb-sidenav-menu " >
                        <div class="nav">
                        <div class="sb-sidenav-menu-heading">Menu</div>
							<a class="nav-link" href="../index.html">

							<div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
								Inicio</a>						
							<a class="nav-link" href="principal.php">
							<div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
								Principal</a>

								<div class="sb-sidenav-menu-heading">Opciones</div>
								<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts"
								><div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
									Reservaciones
									<div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
									></a>
									<div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
										<nav class="sb-sidenav-menu-nested nav">
										<a class="nav-link" href="ReservaMesa.php">Reservación Mesa</a>
										<a class="nav-link" href="ReservaLocal.php">Reservacion Establecimiento</a>
										<a class="nav-link" href="verReservasMesa.php"> ver Reservacion Mesa</a>
										<a class="nav-link" href="verReservasLocal.php">ver Reservacion Establecimiento</a></nav>
									</div>
									<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages"
									><div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
										Comentarios
										<div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
										</a>
										<div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                        <nav class="sb-sidenav-menu-nested nav">
										<a class="nav-link" href="realizarComentario.php">Realizar Comentario</a>
										<a class="nav-link" href="verComentario.php">Ver Comentarios</a>
									    </nav>
										</div>
										
                                        <?php if($tipo_usuario == 1) { ?>
							
							<div class="sb-sidenav-menu-heading">Control</div>
							    <nav class="sb-sidenav-menu-nested nav">
										<a class="nav-link" href="eliReservasMesa.php">Eliminar reservaciones mesas</a>
										<a class="nav-link" href="eliReservasLocal.php">Eliminar reservaciones establecimiento</a>
										<a class="nav-link" href="eliComentario.php">Eliminar comentarios</a>
								</nav>
								
								<a class="nav-link" href="tabla.php">
								<div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
									Usuarios Registrados</a>
								
							</div>

                            <?php } ?>

					    </div>
                    <div class="sb-sidenav-footer" style="background-color:#28241C;">
                        <div class="small">Estas logueado en:</div>
                        Bodegon.com
					</div>
				</nav>
			</div>
            <div id="layoutSidenav_content" >
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Pagina principal de inicio se sesion</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Bienvenidos a la pagina principal del bodegon, gracias por estar al pendiente de nuestros servicios, te deseamos la mejor de las experiencias!</li>
						</ol>

                        <center><img src="assets/img/logo.JPG" class="img-fluid" alt="Responsive image"></center>


                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header"><i class="fas fa-chart-area mr-1"></i>Nuestro alcance en los ultimos años</div>
                                    <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
								</div>
							</div>
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header"><i class="fas fa-chart-bar mr-1"></i>Indice de satisfaccion</div>
                                    <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
								</div>
							</div>
						</div>
                        
					</div>
				</main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Bodegon.com 2022</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
							</div>
						</div>
					</div>
				</footer>
			</div>
		</div>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
	</body>
</html>
