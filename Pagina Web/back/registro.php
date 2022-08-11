<?php 

include ('basedatos.php');

$nombre= $_POST['nombre'];
$apellido= $_POST['apellido'];
$fecha= $_POST['fecha'];
$sexo= $_POST['sexo'];
$usuario= $_POST['usuario'];
$correo_electronico= $_POST['correo_electronico'];
$contraseña= $_POST['constraseña'];
//$contraseña=hash('sha512',$contraseña);

$query= " INSERT INTO usuarios(nombre, apellidos, f_nacimiento, sexo, usuario, correo, constraseña)
        VALUES('$nombre', '$apellido', '$fecha', '$sexo', '$usuario', '$correo_electronico', '$contraseña')
        ";

$verificar_correo=mysqli_query($conexion,
    "select * from usuarios 
    WHERE correo='$correo_electronico'");
    if (mysqli_num_rows($verificar_correo)>0) {
        echo'
        <script> 
        alert("ya hay un correo registrado por favor cambia el correo");
        window.location ="../login.php";
    
         </script> 
        ';
        exit();

        # code...
    }
    $verificar_usuario=mysqli_query($conexion,
    "select * from usuarios 
    WHERE usuario ='$usuario'");
    if (mysqli_num_rows($verificar_usuario)>0) {
        echo'
        <script> 
        alert("ya hay un usuario registrado con ese mismo nombre por favor cambia el nombre de usuario");
        window.location ="../login.php";
    
         </script> 
        ';
        exit();

        # code...
    }
    $runer= mysqli_query($conexion, $query);

if ($runer) {
    echo
        '<script> alert("usuario creado");
         window.location ="../index.php";
         </script> ';
   # code...
    }

else {
    echo '<script> alert("hubo un problema el usuario no se registro ");
    window.location ="../login.php";
    </script> 
';
}
mysqli_close($conexion);


?>