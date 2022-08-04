<?php

include("conexion.php");
$con=conectar();

$cod_empleado=$_POST['cod_empleado'];
$dni=$_POST['dni'];
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];

$sql="UPDATE Empleados SET  dni='$dni',nombres='$nombres',apellidos='$apellidos' WHERE cod_empleado='$cod_empleado'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: empleado.php");
    }
?>