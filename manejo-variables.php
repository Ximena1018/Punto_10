<?php
//$POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];      //recibe el valor del campo "nombre"
    echo "Nombre: ".htmlspecialchars($nombre);
}

//GET

if(isset($_GET["nombre"])){
    $nombre = $_GET["nombre"];
    echo "Nombre: $nombre";
}

//FILES

if (isset($_FILES['archivo'])) {
    $nombreArchivo = $_FILES['archivo']['name'];
    $archivoTemp = $_FILES['archivo']['tmp_name'];
    $directorioDestino = "uploads/" . $nombreArchivo;

    if (move_uploaded_file($archivoTemp, $directorioDestino)) {
        echo "El archivo ha sido subido correctamente.";
    } else {
        echo "Error al subir el archivo.";
    }
}

//REQUEST
if (isset($_REQUEST['usuario'])) {
    $usuario = $_REQUEST['usuario'];
    echo "Usuario: $usuario";
}

// SESSION
session_start();
if (isset($_SESSION['usuario'])) {
    echo "Bienvenido, " . $_SESSION['usuario'];
} else {
    echo "No hay sesión iniciada.";
}

//COOKIE
if (isset($_COOKIE['nombreUsuario'])) {
    echo "Bienvenido de nuevo, " . $_COOKIE['nombreUsuario'];
} else {
    echo "No se ha encontrado la cookie.";
}

