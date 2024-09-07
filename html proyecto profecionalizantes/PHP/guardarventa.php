<?php
    $cel=$_GET ['celu'];
    $cliente=$_REQUEST['cliente'];
    $vendedor=$_REQUEST['vendedor'];
    $cu=$_REQUEST['cuotas'];

    // recuperar precio del celu
    $sel_cel= "SELECT precio FROM celulares WHERE Id = $cel";
      include('conexion.php');
    $mostrar = $conex->query($sel_cel);
    $c = $mostrar->fetch_assoc();
    $precio = $ c['precio'];
    // calcular venta
    if ($cu==1){
        $valor=$c+($c*10) /100;
    }
    elseif ($cu>=1 AND $cu<=6){
        $valor=$c+($c*20) /100;
    }
    else{
        $valor=$c+($c*30)/100;
    }

echo "paga en ".$cu ." cuotas, total a pagar ".$valor." $pesos";
// generamos la consulta
$medio_de_pago = 'tarjeta';

$vt = "INSERT INTO venta(id_vendedor, id_cliente, id_celular, medio_pago, cuotas, valor, fecha)VALUES($vendedor,$cliente, $cel,'tarjeta',$cu, $valor, CURDATE())"; 
$conex->query($vt);


?>