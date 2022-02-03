<?php
require("conexion.php");

   $nombre =$_POST["nombre"];
    $apellido=$_POST["apellido"];
    $puesto=$_POST["puesto"];
    $sueldo=$_POST["sueldo"];
    $area=$_POST["area"];
    $id_empleado=$_POST["id_empleado"];
    $correo=$_POST["correo"];
    $fecha_ingreso=$_POST["fecha_ingreso"];
    $sexo=$_POST["sexo"];

$sql="INSERT INTO h_data (Nombre,Apellido,Puesto,Sueldo,Area,ID_Empleado,Correo,Fecha_Ingreso,Sexo) VALUES ('$nombre','$apellido','$puesto','$sueldo','$area','$id_empleado','$correo','$fecha_ingreso','$sexo')";
$resultado=mysqli_query($enlace,$sql);
header("refresh:0.1; url=index.php");
?>