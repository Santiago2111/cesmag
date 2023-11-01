<?php
include 'index.php';
include 'conexion.php';
?>

<h1> Listado de programas </h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Codigo</th>
      <th scope="col">Nombre</th>
      <th scope="col">Codigo Facultad</th>
      <th scope="col">Opciones</th>
    </tr>
  </thead>
  <tbody>
  <?php
        $sql = "SELECT * FROM programas";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>".$row["codigo_prg"]."</td>";
                echo "<td>".$row["nombre_prg"]."</td>";
                echo "<td>".$row["facultad"]."</td>";
                echo "<td>
                    <a class='btn btn-success'>Editar</a>
                    <a class='btn btn-danger'>Eliminar</a>
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