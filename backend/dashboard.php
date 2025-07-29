<?php
session_start();

if (!isset($_SESSION['user_ci'])) {
    header("Location: login.html");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="registro.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <div class="izq">
        <h1>Bienvenido <?php echo isset($_SESSION['user_name']) ? $_SESSION['user_name'] : 'Usuario'; ?></h1>
        <p>CI: <?php echo $_SESSION['user_ci']; ?></p>
        
        <a href="logout.php">
            <input class="button" type="button" value="Cerrar Sesión">
        </a>
    </div>
</body>
</html>