<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $conexion = new mysqli("localhost", "root", "", "Proyecto");

    if ($conexion->connect_error) {
        die("Connection failed: " . $conexion->connect_error);
    }

    $first_name = $conexion->real_escape_string($_POST["first_name"]);
    $last_name = $conexion->real_escape_string($_POST["last_name"]);
    $ci = $conexion->real_escape_string($_POST["ci"]);
    $age = $conexion->real_escape_string($_POST["age"]);
    $mail = $conexion->real_escape_string($_POST["mail"]);
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $phone = $conexion->real_escape_string($_POST["phone"]);




    $sql_check = "SELECT 1 FROM Users WHERE ci = '$ci' OR mail = '$mail'";
    $resultado = $conexion->query($sql_check);

    if ($resultado->num_rows > 0) {
        header("Location: rechazar.php?error=usuario_ya_registrado");
        exit();
    }

    $sql_insert = "INSERT INTO Users (ci, first_name, last_name, age, mail, passwrd, phone) VALUES ('$ci', '$first_name', '$last_name', '$age', '$mail', '$password', '$phone')";

    if ($conexion->query($sql_insert) === TRUE) {
        header("Location: confirmar.php");
        exit();
    } else {
        header("Location: rechazar.php?error=error_insercion");
        exit();
    }

    $conexion->close();
}
?>