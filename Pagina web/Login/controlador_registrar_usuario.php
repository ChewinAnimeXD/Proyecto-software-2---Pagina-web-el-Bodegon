<?php
if (!empty($_POST["Registro"]))
{
    if (empty($_POST["nombre"]) or empty($_POST["apellido"]) or empty($_POST["correo"]) or empty($_POST["contraseña"]))
    {
        echo '<div><center><FONT COLOR="red"> Uno de los campos esta vacio</FONT></center></div>';
    } else {

        $nombre=$_POST["nombre"];
        $apellido=$_POST["apellido"];
        $correo=$_POST["correo"];
        $contraseña=$_POST["contraseña"];
        $contraseñaEncriptada = sha1($contraseña);

        //Verificacion de correo 
        include 'conexion_verifi_correo.php';

        $verificar_correo = mysqli_query($conexion_correo, "SELECT * FROM usuarios where usuario='$correo'");

        if(mysqli_num_rows($verificar_correo)>0)
        {
            echo '<div><center><FONT COLOR="red"> El correo ya se encuentra registrado, intente con otro. </FONT></center></div>';
            exit();
        }

        mysqli_close($conexion_correo);

        if(preg_match('/[0-9]{1,}/', $nombre) || preg_match('/[0-9]{1,}/', $apellido) || !filter_var($correo, FILTER_VALIDATE_EMAIL))
        {
            echo '<div><center><FONT COLOR="red"> Los campos no son validos, Recuerde que el nombre y apellido solo puden tener numero y el correo debe de tener un formato valido </FONT></center></div>';
            echo '<div><center><FONT COLOR="red"> Usuario No registrado </FONT></center></div>';
        }else
        {
            $sql=$conexion->query(" insert into usuarios(usuario,password,nombre,apellido) values('$correo','$contraseñaEncriptada','$nombre','$apellido') ");
            if($sql=1){
                echo '<div><center><FONT COLOR="green"> Usuario registrado correctamente </FONT></center></div>';
            }else{
                echo '<div><center><FONT COLOR="red"> Usuario No registrado </FONT></center></div>';
            }
        }




    }
}




?>