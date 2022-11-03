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

        $sql=$conexion->query(" insert into usuarios(usuario,password,nombre,apellido) values('$correo','$contraseñaEncriptada','$nombre','$apellido') ");
        if($sql=1){
            echo '<div><center><FONT COLOR="green"> Usuario registrado correctamente </FONT></center></div>';
        }else{
            echo '<div><center><FONT COLOR="red"> Usuario No registrado </FONT></center></div>';
        }
    }
}




?>