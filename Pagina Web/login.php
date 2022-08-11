
<?php

session_start();
    if(isset($_SESSION['usuario'])){
        header("Location: index.php" );

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login and register</title>
    
    
    <link rel="stylesheet" href="vista/css/estiloslogin.css">


</head>
<body>
   
    <main>
        <div class="contenedor">

            <div class="caja_trasera">
                <div class="caja_log">
                    <h3>¿Ya eres parte de nuestra familia?</h3>
                    <p>inicia sesion para poder acceder</p>
                    <button id="iniciar_sesion">INICIAR SESION</button>
                </div>
                <div class="caja_regis">
                    <h3>¿quieres ser parte de nuestra familia?</h3>
                    <p>registrate para ser parte de nuestra familia</p>
                    <button id="iniciar_registro">REGISTRARSE</button>
                </div>
            </div>
            <div class="contenedor_log_regis">
                <form action="back/loguearse.php"  method="POST" class="formulario__login">
                    <h2> Iniciar Sesion </h2>
                    <input type="text" placeholder="Usuario" name="usuario">
                    <input type="password" placeholder="Contraseña" name="constraseña">
                    <button > Entrar </button>
                </form>
                <form action="back/registro.php" method="POST" class="formulario__register">
                    <h2> Registrarse </h2> 
                    <input type="text" placeholder="Nombre" name="nombre">
                    <input type="text" placeholder="Apellido" name="apellido">
                    <input type="date" placeholder="Fecha Nacimiento" name="fecha">
                    <input type="text" placeholder="Sexo" name="sexo">
                    <input type="text" placeholder="Usuario" name="usuario" >
                    <input type="text" placeholder="Correo electronico" name="correo_electronico">
                    <input type="password" placeholder="Contraseña" name="constraseña">
                    <button > Registrarse</button>
                </form>
            </div>

        </div>
    </main>
    <script src="vista/js/script.js"></script>
</body>
</html>