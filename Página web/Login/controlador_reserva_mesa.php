<?php
if (!empty($_POST["Registro"]))
{
    if (empty($_POST["nombre"]) or empty($_POST["mesa"]) or empty($_POST["fecha"]) or empty($_POST["hora"]))
    {
        echo '<div><center><FONT COLOR="red"> Uno de los campos esta vacio </FONT></center></div>';
    } else {
        
        $nombre=$_POST["nombre"];
        $mesa=$_POST["mesa"];       
        $fecha=$_POST["fecha"];
        $hora=$_POST["hora"];
        $id=$_SESSION['id'];

        //Verificacion de correo 
        include 'conexion_verifi_correo.php';

        $verificar_local = mysqli_query($conexion_correo, "SELECT * FROM rlocal where fecha = '$fecha'");
        $verificar_mesa = mysqli_query($conexion_correo, "SELECT * FROM rmesas where fecha = '$fecha'");

        if(mysqli_num_rows($verificar_local)>0 || mysqli_num_rows($verificar_mesa)>0)
        {
            echo '<div><center><FONT COLOR="red"> La fecha no esta disponible, intente con otra. </FONT></center></div>';

        }else{

        $sql=$conexion->query(" insert into rmesas(nombre_l,mesa,fecha,hora,comparador_id_u,id_usuario) values('$nombre','$mesa','$fecha', '$hora','$id','$id') ");
        
        if($sql=1){
            echo '<div><center><FONT COLOR="green"> Se ha reservado correctamente </FONT></center></div>';
        }else{
            echo '<div><center><FONT COLOR="red"> La reservacion no pudo ser realizada </FONT></center></div>';
        }
        }
    }
}

?>