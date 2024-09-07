<?php

include ('conexion.php');
//recuperar los celus
//generar la consulta 
//$celu="SELECT* FROM celulares";
//agregar una clausula INNER JOIN
//$celu= "SELECT celulares.Id, celulares.Marca, celulares.Modelo, celulares.Color, celulares.Almacenamiento, celulares.Procesador, celulares.Ram, celulares.Bateria, celulares.precio, color.id, color.Nombre AS cnombre FROM celulares INNER JOIN color ON color.id=celulares.Color";
$celu="SELECT * FROM celulares";
//ejecitar la consulta
$cel=$conex->query($celu);
//llamar a los clientes
$cli="SELECT * FROM cliente";
$cliente=$conex->query($cli);
$ven="SELECT * FROM vendedor";
$vende=$conex->query($ven);
?>
<!DOCTYPE html>
<html>
<head>
    <title>venta de celulares</title>
</head>
<body>
    <h1>venta de celulares</h1>

<form action="guardarventa.php" method="get" style="backgrous-color: red">
    <select name="celu">
        <option value="0">Elegir un celu</option>
        <?php
        while($dato=$cel->fetch_assoc()){
            echo "<option value='".$dato["Id"]."'>".$dato["Modelo"].'-'
            .$dato1["cnombre"]. '$'. $dato["precio"].
            "</option>";
        }
        ?>
    </select>
    <br>

    <select name="cliente">
        <option value="0">Selecciona un cliente</option>
        <?php
        while($dato2=$cliente->fetch_assoc()){
            echo "<option value='".$dato2["id"]."'>".$dato2["nombre"].'-'
            .$dato2["telefono"].
            "</option>";
        }
        ?>
    </select>
    <br>

    <select name="vendedor">
        <option value="0">Selecciona un vendedor</option>
        <?php
        while($dato3=$vende->fetch_assoc()){
            echo "<option value='".$dato3["id"]."'>".$dato3["nombre"].'-'
            .$dato3["email"].'-'.$dato3["telefono"].
            "</option>";
        }
        ?>
    </select>
    <br>
    ¿En cuantas cuotas lo va a pagar?
    <input type="nomber" name="cuotas">
    <br>
    <input type="submit" name="" value="vender">

</form>
</body>
</html>