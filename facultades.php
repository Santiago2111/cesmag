<?php
    include 'index.php';
    include 'conexion.php';
?>

<h1> Listado de facultades </h1>

<table class="table">
  <thead>
    <tr>
        <th scope="col">Codigo</th>
        <th scope="col">Nombre</th>
        <th scope="col">Opciones</th>
        <div align="center">
            <a class = 'btn btn-primary'
            href="form_registro_fac.php">Adicionar
        </div>
    </tr>
    </thead>
    <tbody>
    <?php
    $sql = "SELECT * FROM facultades";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>".$row["codigo_fac"]."</td>";
            echo "<td>".$row["nombre_fac"]."</td>";
            echo "<td>
            <a class='btn btn-success'>Editar</a>
            <a class='btn btn-danger' href='eliminar_Fac.php?id=".$row["codigo_fac"]."'>Eliminar</a>
            </td>";
            echo "</tr>";
        }
        } else {
            echo "0 resultados";
        }
        $conn->close();
    ?>
    </tbody>
</table>