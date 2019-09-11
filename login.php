<?php

include 'conexion.php';
$usu=$_POST["usua"];
$pas=$_POST["pass"];
$encri=md5("$pas");

$consultar="call pr_acceso_login('$usu','$encri')";
$resultado=mysqli_query($con,$consultar);
$filas=mysqli_num_rows($resultado);


if($filas>0){
  echo " Usuario validado correctamente ";
    /*header("location:");*/

}else{

  echo " Usuario o password incorrectos ";

}
  mysqli_free_result($resultado);
  mysqli_close($con);


 ?>
