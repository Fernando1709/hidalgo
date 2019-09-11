<?php
include 'conexion.php';
$user=$_POST["usuario"];
$pass=$_POST["password"];
$encri = md5 ("$pass");/* md5 sirve para encriptar  */




$insertar = "call pr_insertar_usuario('$user','$encri')";

$resultado=mysqli_query($con,$insertar);

if ($resultado) {
  echo "usuario regristrado";
 /*header("location:registrar.html");*/


}else{
    echo "usuario no  regristrado";
}
        mysqli_close($con);





 ?>
