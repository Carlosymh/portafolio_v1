<?php
session_start();
require("conexion.php");

?>
<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <style>
    *{
        margin:0 auto;
    }   

.filter{
    background:yellow;
    padding:5px;
    display:flex;
    flex-wrap:wrap;
}
.nav{
   
    background:rgb(249, 253, 1);
    color:yellow;
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
    background:gray;
    border-radius: 5px;
    padding:3px;
    text-decoration:none;
}
.container{
    margin:10px;
    background:#ddd;
}
body{
background:#eee;
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
    <h1>BD </h1>

</div>
<div class="filter">
<a href="tabla.php"> Tabla</a>
        </div>
    <div class="container">
        
<?php 
        require("form.php");         
?>
        
    </div>
<footer><h6>Creado por &copy; Yovani Hernandez (<b>YOVHER</b>)</h6></footer>
</body>
</html>

