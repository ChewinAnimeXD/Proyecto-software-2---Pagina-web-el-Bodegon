<?php
if (!empty($_POST["borrarc"]))
{

  include 'conexion_verifi_correo.php';

  $id=$_POST["txtID"];
  $sql= mysqli_query($conexion_correo," DELETE FROM comentarios WHERE id_comentarios = $id ");



}

?>