<?php
require("conexion.php");
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla</title>
    <style>
    *{
        margin:0 auto;
    }   
table{
    width:100%;
    background:#eee;
    border:2px solid #000;
    margin:10px 0;
    
}
th{
    background:#000;
    color:#fff;
    text-align:center;
    align-items:center;
    justify-content:center;
    margin:auto;
}

tr{
    padding:auto;

}

td{
    text-align:center;
    align-items:center;
    justify-content:center;
    margin:auto;
    border-bottom:1px dotted gray;
}
.filter{
    background:yellow;
    padding:5px;
    display:flex;
    flex-wrap:wrap;
}
.nav{
   
    background:rgb(249, 253, 1);
    color:#000;
    text-align:center;
    font-size:40px;
    
}

.filter a{
    border:2px solid gray;
    color:#fff;
    background:#000;
    border-radius: 5px;
    padding:2px;
    text-decoration:none;
}
.filter a:hover{
    border:2px solid #000;
    color:#000;
    background:#eee;
    border-radius: 5px;
    padding:3px;
    text-decoration:none;
} 
body{
    background:#ddd;
}
footer{
    text-align:center;
    color:#eee;
    padding:10px;
    font-size:20px;
}


 </style>
</head>
<body>

<div class="nav">
    <h1>BD</h1>

</div>
<div class="filter">
    <form action="tabla.php" method="POST" style="margin:0; padding:0;">
    <select name="filtro" id="filtro" style="margin:0; padding:0;">
        <option value="ID_Empleado">ID Empleados</option>
    <option value="concat(Nombre,' ', Apellido)">Nombre</option>
        <option value="Puesto">Puesto</option>
        <option value="Area">Area</option>
        <option value="Sexo">Sexo</option>
    </select>
    <input type="text" name="valor" style="margin:0; padding:0;">

    <input type="submit"  name="btn"value="Buscar" style="margin:0; padding:0;">
    </form>
    <a href="Tablaphpandmysql.php"> Formulario</a>
    <?php if(empty($_POST['valor'])){
        echo "<a href='excel.php'> Descarga</a>" ;
               }else{
                  $filtro=$_POST['filtro'];
                $valor=$_POST['valor'];
                echo '<a href="excel.php?filtro='.$filtro.'&valor='.$valor.'"> Descarga</a>';
              }   ?>
    
  <!--header("Location:index.php?error=$error");-->
</div>
<div class="container">       
              <table >
                 <tr>
                <th>ID Empleado</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Puesto</th>
                <th>Area</th>
                <th>Sexo</th>
                <th>Fecha de Ingreso</th>
                </tr>
                <?php
            if(empty($_POST['valor'])){
                $sql2="SELECT * FROM  h_data " ;
              $resultado=mysqli_query($enlace,$sql2);}else{
                  $filtro=$_POST['filtro'];
                $valor=$_POST['valor'];
              
                  $sql2="SELECT * FROM  h_data  h_data WHERE $filtro LIKE '%$valor%' ";
              $resultado=mysqli_query($enlace,$sql2);
              }    
                  while($mostrar=mysqli_fetch_array($resultado)){
                
                      echo "<tr><td>".$mostrar['ID_Empleado']."</td>";
                      echo "<td>".$mostrar['Nombre']."</td>";
                      echo "<td>".$mostrar['Apellido']."</td>";
                      echo "<td>".$mostrar['Puesto']."</td>";
                      echo "<td>".$mostrar['Area']."</td>";
                      echo "<td>".$mostrar['Sexo']."</td>";
                      echo "<td>".$mostrar['Fecha_Ingreso']."</td></tr>";
                
                
                  
                }
                ?></table>
                </div>
                <footer><h6>Creado por &copy; Yovani Hernandez ( <b>YOVHER</b> )</h6></footer>
          
</body>

</html>