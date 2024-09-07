<?php

include ('conexion.php');
//recuperar los celus
//generar la consulta 
//agregar una clausula INNER JOIN
//$celu= "SELECT celulares.Id, celulares.Marca, celulares.Modelo, celulares.Color, celulares.Almacenamiento, celulares.Procesador, celulares.Ram, celulares.Bateria, celulares.precio, color.id, color.Nombre AS cnombre FROM celulares INNER JOIN color ON color.id=celulares.Color";
$nudisa="SELECT * FROM registro";
//ejecitar la consulta
$nudi=$conex->query($nudisa);
?>

<!DOCTYPE html>
<!-- <html lang="en"> -->
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="estilo del proyecto.css">
    <link rel="icon" href="logo.jpg">
	<title>Nudisa</title>
</head>
<body>
    <form class="formu" method="post" action="registro.php">
        <div >
            <h1 class="arriba">Registrarse</h1>
        </div>
        <div>
            <label class="iz" for="nombre">Nombre</label><br>
            <input type="text" name="nombre" placeholder="Nombre" required >
            
            <!-- placeholder es lo que vemos en el campo -->
        </div>
    <br>
    <div>
            <label class="iz" for="apellido">Apellido</label><br>
            <input type="text" name="apellido" placeholder="Apellido" required >
            
            <!-- placeholder es lo que vemos en el campo -->
        </div>
    <br>
        <div>
            <label class="iz" for="correo">Correo electronico</label><br>
            <input type="text" name="correo" placeholder="Correo electronico" required >
            <!-- placeholder es lo que vemos en el campo -->
        </div>
    <br>
        <div>
            <label class="iz" for="contrasenia">Contraseña</label><br>
            <input type="password" name="contrasenia" placeholder="Contraseña" required>
        </div>
    <br>
        <div>
            <label class="iz" for="contrasenia2">Confirmar contraseña</label><br>
            <input type="password" name="contrasenia2" placeholder="Confirmar contraseña" required>
        </div>
        <div >
            <button class="buto">Registrarse</button>
        </div>
    </form>
</body>
</html>