<?php
    include 'index.php';
    include 'conexion.php';
    $codigo = $_POST['codigo_fac'];
    $nombre = $_POST['nombre_fac'];

    $sql = "INSERT INTO facultades (codigo_fac, nombre_fac) VALUES ('$codigo', '$nombre')";

    if ($conn->query($sql) === TRUE) {
        echo "Nuevo registro creado correctamente";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
?>