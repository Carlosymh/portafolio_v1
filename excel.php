<?php
require("conexion.php");
session_start();


header("Content-Type: application/xls");
header("Content-Disposition: attachment; filename= Registro.csv");

?>
  <table >
                 <tr>
                <th>ID Empleado</th>
                <th>Nombre</th>
                <th>Puesto</th>
                <th>Area</th>
                <th>Sexo</th>
                <th>Fecha de Ingreso</th>
                </tr>
                <?php
            if(empty($_GET['valor'])){
              $sql2="SELECT ID_Empleado, concat(Nombre,' ', Apellido) AS Full_Name, Puesto, Area, Sexo, Fecha_Ingreso FROM  h_data " ;
            $resultado=mysqli_query($enlace,$sql2);}else{
                $filtro=$_GET['filtro'];
              $valor=$_GET['valor'];
            
                $sql2="SELECT ID_Empleado,concat(Nombre,' ', Apellido) AS Full_Name, Puesto, Area, Sexo, Fecha_Ingreso FROM  h_data WHERE $filtro LIKE '%$valor%' " ;
            $resultado=mysqli_query($enlace,$sql2);
            }             
                  while($mostrar=mysqli_fetch_array($resultado)){
                
                      echo "<tr><td>".$mostrar['ID_Empleado']."</td>";
                      echo "<td>".$mostrar['Full_Name']."</td>";
                      echo "<td>".$mostrar['Puesto']."</td>";
                      echo "<td>".$mostrar['Area']."</td>";
                      echo "<td>".$mostrar['Sexo']."</td>";
                      echo "<td>".$mostrar['Fecha_Ingreso']."</td></tr>";
                
                
                  
                }
                ?></table>





