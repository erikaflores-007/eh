<?php
include("conexion.php");
if  (isset($_POST['contac'])){

    if  (
strlen ($_POST['name']) >= 1 &&
strlen ($_POST['email']) >= 1 &&
strlen ($_POST['direction']) >= 1 &&
strlen ($_POST['phone']) >= 1 &&
strlen ($_POST['message']) >= 1 
 
) {
    $name = trim($_POST['name']);
    $emil = trim($_POST['email']);
    $direction = trim($_POST['direction']);
    $phone = trim($_POST['phone']);
    $fecha = date("d/m/y");
    $consulta = "INSERT INTO datos (nombre, email, direccion, telefono, mensaje, fecha )
    VALUES('$name', '$email', '$direction', '$phone', '$message', '$fecha')";
    $resultado = mysqli_query($conex, $consulta);
    if ($resultado){
        ?>
        <h3 class="success">Tu pedido se ha completado</h3>
        <?php
    } else{
        ?>
        <h3 class="error">Ocurrio un Error</h3>
        <?php
    }

    } else {?> <h3 class="error">Llena todos los campos</h3> <?php }
}

    

?>
