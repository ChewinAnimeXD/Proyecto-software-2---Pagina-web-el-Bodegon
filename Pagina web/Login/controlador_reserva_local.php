<?php
if (!empty($_POST["Registro"]))
{
    if (empty($_POST["nombre"]) or empty($_POST["fecha"]))
    {
        echo '<div><center><FONT COLOR="red"> Uno de los campos esta vacio </FONT></center></div>';
    } else {
        
        $nombre=$_POST["nombre"];     
        $fecha=$_POST["fecha"];
        $id=$_SESSION['id'];

            //Verificacion de correo 
                include 'conexion_verifi_correo.php';

                $verificar_local_fecha = mysqli_query($conexion_correo, "SELECT * FROM rlocal where fecha = '$fecha'");
                $verificar_local_nombre = mysqli_query($conexion_correo, "SELECT * FROM rlocal where nombre_l = '$nombre'");
        
        
        
                $verificar_nombre = mysqli_query($conexion_correo, "SELECT * FROM rmesas where nombre_l = '$nombre'");
                $verificar_mesa_fecha = mysqli_query($conexion_correo, "SELECT * FROM rmesas where fecha = '$fecha'");

        
                if(mysqli_num_rows($verificar_local_fecha)>0 && mysqli_num_rows($verificar_local_nombre)>0)
                {
                    echo '<div><center><FONT COLOR="red"> La Reservacion no se puede realizar ya que alguien ya tiene una reserva para ese dia. </FONT></center></div>';

                }else{
                    if(mysqli_num_rows($verificar_mesa_fecha)>0 && mysqli_num_rows($verificar_nombre)>0){

                        echo '<div><center><FONT COLOR="red"> La Reservacion no se puede realizar ya que alguien tiene un reservacion de mesa. </FONT></center></div>';

                    }else {

                        $sql=$conexion->query(" insert into rlocal(nombre_l,fecha,comparador_id_u,id_usuario) values('$nombre','$fecha','$id','$id') ");

                    if($sql=1){
                        echo '<div><center><FONT COLOR="green"> Se ha reservado correctamente </FONT></center></div>';  
                  

                    }else{
                        echo '<div><center><FONT COLOR="red"> La reservacion no pudo ser realizada </FONT></center></div>';
                    }

                    }

                    

                }
        
                mysqli_close($conexion_correo);

    }
}

?>