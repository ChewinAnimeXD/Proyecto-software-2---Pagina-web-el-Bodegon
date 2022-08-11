<?php
/*
$user = "wwwAdmin";
$password = "123456";
$database = "logbode";
$table = "usuarios";
*/


$conexion= mysqli_connect("localhost","root","","logbode");

  if($conexion){
      echo 'conexion exitosa';
  }
  else {
    echo 'error';
  }
  ?>