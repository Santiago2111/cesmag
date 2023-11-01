<?php
    include 'index.php';
    include 'conexion.php';
?>
<div class="container">
<form class="text-center border border-light p-5" action="registrar_fac.php" method="POST">

    <p class="h4 mb-4">Registro de Facultad</p>

    <input type="text" id="codigo_fac" name="codigo_fac" class="form-control mb-4" placeholder="Codigo">

    <input type="text" id="nombre_fac" name="nombre_fac" class="form-control mb-4" placeholder="Nombre">

    <button class="btn btn-success" type="submit">Registrar</button>

</form>
</div>