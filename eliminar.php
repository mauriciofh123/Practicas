<?php

include("conexion.php");
$con=conectar();

$cod_empleado=$_GET['id'];

$sql="DELETE FROM Empleados  WHERE cod_empleado='$cod_empleado'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: empleado.php");
    }
?>