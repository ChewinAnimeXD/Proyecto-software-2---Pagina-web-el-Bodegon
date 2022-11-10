<?php
if (!empty($_POST["Registro"]))
{
    if (empty($_POST["titulo"]) or empty($_POST["comentario"]) or empty($_POST["calificación"]))
    {
        echo '<div><center><FONT COLOR="red"> Uno de los campos esta vacio </FONT></center></div>';
    } else {
        
        $titulo=$_POST["titulo"];
        $comentario=$_POST["comentario"];
        $id=$_SESSION['id'];
        $calificación=$_POST["calificación"];
        $fecha_actual = date("y-m-d");

        $sql=$conexion->query(" insert into comentarios(titulo,mensaje,calificación,fecha,comparador_id_u,id_usuario) 
        values('$titulo','$comentario','$calificación','$fecha_actual','$id','$id') ");
        
        if($sql=1){
            echo '<div><center><FONT COLOR="green"> El comentario fue enviado correctamente </FONT></center></div>';

        }else{
            echo '<div><center><FONT COLOR="red"> El comentario no ha sido enviado </FONT></center></div>';
        }
    }
}

?>