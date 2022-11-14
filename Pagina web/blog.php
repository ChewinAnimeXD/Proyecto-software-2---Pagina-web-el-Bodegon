<!DOCTYPE html>
<html lang="es">
  <head>
	  
	  
	  <style>
		
			body
			{
				font-size: 16px;
				margin top: 25px !important;
			}
			
			.cuadro
			{
				background-color: #ccc;
				font-size: 500% !important;
				border-radius: 10px;
				border: 2px solid #333;
				color: #000;
			    box-shadow: 10px 10px 10px #aaa;
			}
			
			.noticia
			{
				font-size: 150% !important;
				text-align: justify !important;
				padding-top: 30px;
				padding-bottom: 30px;
			}
			
			.foto
			{
				max-width: 200px;
				margin: 10px;
				margin-right: 25px;
				border: 10px solid #fff;
				border-bottom: 50px solid #fff;
				float: left;
				margin-bottom: 0px;
				box-shadow: 10px 10px 10px #aaa;
			}
			
			textarea
			{
				width: 90%;
				min-height: 200px;
			}
			
		</style>
	  
	  
	  
    <title>Blog - Pizzeria el Bodegon</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nothing+You+Could+Do" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
  	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html"><span class="flaticon-pizza-1 mr-1"></span>Pizzeria<br><small>El Bodegon</small></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item"><a href="index.html" class="nav-link">Inicio</a></li>
	          <li class="nav-item"><a href="menu.html" class="nav-link">Menu</a></li>
	          <li class="nav-item"><a href="services.html" class="nav-link">Servicios</a></li>
	          <li class="nav-item active"><a href="blog.php" class="nav-link">Blog</a></li>
	          <li class="nav-item"><a href="about.html" class="nav-link">Nosotros</a></li>
	          <li class="nav-item"><a href="Eventos.html" class="nav-link">Eventos</a></li>
		      <li class="nav-item"><a href="Login/principal.php" class="nav-link">Inicio de sesion</a></li>
	        </ul>
	      </div>
		  </div>
	  </nav>
    <!-- END nav -->
    

    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Lee los comentarios mas destacados </h2>
            <p>Este es un espacio para leer los comentarios mas relevantes que hacen nuestros clientes sobre lo que les ha parecido el estableciminto o su comida.</p>
          </div>			
        </div>		  
		  <div class="row justify-content-center">
			<div class="col-11">
				<h1>Comentarios</h1>
				
				<?php 
				
				$conn = mysqli_connect('localhost', 'root', '', 'sistema');
			
				$resultado = mysqli_query($conn, 'SELECT * FROM comentarios join  usuarios using(id_usuario) ');
			
				while ($comentario = mysqli_fetch_object($resultado))
				{
					?> 
					<?php echo($comentario->fecha); ?><br>
					<b><?php echo($comentario->nombre); ?> Dice: </b> 
					
					<?php echo($comentario->mensaje); ?>
					<br />
					<hr />
					
					<?php
				}
			
			?>
				
        
        
      </div>
    </section>

    <footer class="ftco-footer ftco-section img">
    	<div class="overlay"></div>
      <div class="container">
        <div class="row mb-5">
          <div class="col-lg-3 col-md-6 mb-5 mb-md-5">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Sobre nosotros</h2>
              <p>Somos un restaurante con varios establecimientos a nivel de boyaca y sus alredesores siendo la pizza una de sus grandes ofertas para el publico.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="https://www.twitter.com"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="https://www.facebook.com/pizzeriaelbodegon/?ref=page_internal"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="https://www.instagram.com/elbodegon_pizzeria/"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-5 mb-md-5">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Riente en el Blog</h2>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_2.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Una pasta deliciosa</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> junio 15, 2022</a></div>
                    <div><a href="#"><span class="icon-person"></span> Carlos Andres</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 3</a></div>
                  </div>
                </div>
              </div>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_1.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Algo demorado</a></h3>
                  <div class="meta">
                    <div><a ><span class="icon-calendar"></span> junio 18, 2022</a></div>
                    <div><a ><span class="icon-person"></span> edwin sanabria</a></div>
                    <div><a ><span class="icon-chat"></span> 3</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <div class="col-lg-3 col-md-6 mb-5 mb-md-5">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Alguna Pregunta?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">Cra. 12 #12-08, Sogamoso, Boyacá</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+57 (608) 7702099</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">elbodegonpizzeria@gmail.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos los derechos reservados al Bodegon   </a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>