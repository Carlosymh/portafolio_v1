<form action="registro.php" method="POST" style=" background:#eee; text-align:center; align-items:center; width:400px; padding:10px; border-radius:20px;">

<h2 class="titulo">Registro de Datos</h2>

<label for="nombre">Nombre : <input type="text" name="nombre"  placeholder="Ingresa tu Nombre" required></label><br>
<label for="apellido">Apellido : <input type="text" name="apellido"  placeholder="Ingresa tu Apellido" required></label><br>
<label for="puesto">Puesto : <input type="text" name="puesto"  placeholder="Ingresa tu Puesto" required></label><br>
<label for="area">Area : <input type="text" name="area"  placeholder="Ingresa tu Area" required></label><br>
<label for="sueldo">Sueldo : <input type="text" name="sueldo"  placeholder="Ingresa tu Sueldo" required></label><br>
<label for="id_empleado">Numero de Empleado : <input type="nomber" name="id_empleado"  placeholder="Ingresa tu Numero de empleado" required></label><br>
<label for="correo">Correo : <input type="email" name="correo"  placeholder="Ingresa tu  Correo" required></label><br>
<label for="fecha_ingreso">Fecha de Ingreso : <input type="date" name="fecha_ingreso"  required></label><br>
<label for="sexo">Sexo : <select name="sexo" required>
                <option value="Hombre">Hombre</option>
                <option value="Mujer" selected>Mujer</option>
                </select></label><br><br>
<input type="submit" class="btn" name="registrarse" value="registrarse">

</form>