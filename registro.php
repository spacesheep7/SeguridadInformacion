<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $nombre = trim($_POST['nombre']);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $password = $_POST['password'];

    if (
        empty($nombre) ||
        !$email ||
        strlen($password) < 8 ||
        !preg_match("/^[A-Za-zÁÉÍÓÚáéíóúñÑ ]+$/", $nombre)
    ) {
        exit("Datos inválidos.");
    }

    echo "Datos correctos.";
}
?>