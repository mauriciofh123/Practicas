<?php
include("conexion.php");
$con=conectar();

$cod_empleado=$_POST['cod_empleado'];
$dni=$_POST['dni'];
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];


$sql="INSERT INTO Empleados VALUES('$cod_empleado','$dni','$nombres','$apellidos')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: empleado.php");
    
}else {
}
?>