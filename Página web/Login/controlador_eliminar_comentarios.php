<?php
if (!empty($_POST["borrar"]))
{

  include 'conexion_verifi_correo.php';

  $codigo=$_POST["id_comentarios"];

    $sql = "DELETE FROM comentarios WHERE id_comentarios = $codigo";

 
}

?>