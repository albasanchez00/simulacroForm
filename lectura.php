<?php
session_start();
if (!empty($_GET["servicio"]) && !empty($_GET["fecha"]) && !empty($_GET["horas"]) && !empty($_GET["nombre"]) && !empty($_GET["email"]) && !empty($_GET["tlfno"])) {
    $servicio = $_GET["servicio"];
    $fecha = $_GET["fecha"];
    $fechaT = date($_GET["fecha"]);
    $fechaSalida = date($_GET["fecha"], "d-m-Y");
    $horas = $_GET["horas"];
    $nombre = $_GET["nombre"];
    $email = $_GET["email"];
    $tlfno = $_GET["tlfno"];
    $mensaje = $_GET["descripcion"];
    $errores = array();

    //Validamos que el telefono tenga el formato +0034 que comience por 679 y luego contenga 8 digitos más
    if (!preg_match("/^(?:(?:\+|00)?34)?[679]\d{8}$/", $tlfno)) {
        $errores[] = "<p style='color: darkred'><strong>ERROR:</strong> El numero de telefono no es valido (XXXXXXXXX)</p>";
    }

    if (!is_string($nombre) || preg_match("/[0-9]/", $nombre)) {
        $errores[] = "<p style='color: darkred'><strong>ERROR:</strong> El nombre solo permite texto</p>";
    }
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errores[] = "<p style='color: darkred'><strong>ERROR:</strong> Verifique el email</p>";
    }
}else{
    $errores[] = "<p style='color: darkred'><strong>ERROR:</strong> Todos los datos son requeridos.</p>";
}
if (count($errores) > 0) {
    for ($x = 0; $x < count($errores); $x++) {
        $cadena=$errores[$x];
    }
    header("Location: index.php?cadena=".$cadena);
}else{
    $_SESSION["servicio"] = $servicio;
    $_SESSION["fecha"] = $fecha;
    $_SESSION["horas"] = $horas;
    $_SESSION["nombre"] = $nombre;
    $_SESSION["email"] = $email;
    $_SESSION["tlfno"] = $tlfno;
    header('Location: confirmacion.php');
}