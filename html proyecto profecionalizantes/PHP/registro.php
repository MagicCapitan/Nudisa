
<?php
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$contra = $_POST['contrasenia'];
$contra2 = $_POST['contrasenia2'];

// preguntarse sei esta bien la contrasenia con un if
$arible="INSERT INTO registro {nombre, apellido, correo, contrasenia} Values ('$nombre', '$apellido', '$correo', '$contra')";
include 'conexion.php';

if ($contra === $contra2) {
    echo 'pruede ingresar';
    $conex->query($arible);
}

else {
    echo 'las contrasenias son difirentes';

    header('location:registrarse.php');
  
}


?>