 <?php
 
    session_start();




    include 'basedatos.php';
 
    $usuario = $_POST["usuario"];
    $clave = $_POST["constraseña"];

    $confirmar_usuarios= mysqli_query($conexion,"
    SELECT * FROM usuarios 
    WHERE usuario='$usuario' and constraseña='$clave'");
   
    
    if (mysqli_num_rows($confirmar_usuarios) > 0) {
        $_SESSION ['usuario'] = $usuario;
        header("location: ../index.php");
       
        exit;
    }

    else{
        echo '
             <script >
                 alert("el usuario no existe, verificar los datos e intente ingresar nuevamente");
                  window.location="../login.php";
             </script> ';    
        exit;
    }   

 
 ?>