<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $conexion = new mysqli("localhost", "root", "", "Proyecto");
    $mail = $_POST["mail"];
    $password = $_POST["password"];

    $sql = "SELECT ci, first_name, last_name, passwrd FROM Users WHERE mail = '$mail'";
    $resultado = $conexion->query($sql);

    if ($resultado->num_rows > 0) {
        $usuario = $resultado->fetch_assoc();
        
        if (password_verify($password, $usuario['passwrd'])) {
            $_SESSION['user_ci'] = $usuario['ci'];
            $_SESSION['user_name'] = $usuario['first_name'] . ' ' . $usuario['last_name'];
            
            header("Location: dashboard.php");
            exit();
        } else {
            header("Location: login_error.php");
            exit();
        }
    } else {
        header("Location: login_error.php");
        exit();
    }

    $conexion->close();
}
?>