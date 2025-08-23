<?php
session_start();

$usuarioCorrecto = "admin";
$claveCorrecta   = "admin123";

$usuario = isset($_POST['usuario']) ? $_POST['usuario'] : '';
$clave   = isset($_POST['clave']) ? $_POST['clave'] : '';

if ($usuario === $usuarioCorrecto && $clave === $claveCorrecta) {
    $_SESSION['admin'] = true;
    header("Location: admin.php");
    exit;
} else {
    header("Location: error.php");
    exit;
}
?>

