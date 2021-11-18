<?php

include("conexion.php");
$con=conectar();

$idempleado=$_POST['idempleado'];
$Nombre=$_POST['Nombre'];
$Apellido=$_POST['Apellido'];
$Telefono=$_POST['Telefono'];
$Correo=$_POST['Correo'];

$sql="UPDATE empleados SET  Nombre='$Nombre',Apellido='$Apellido',Telefono='$Telefono',Correo='$Correo' WHERE idempleado='$idempleado'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: empleados.php");
    }
?>