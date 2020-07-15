<?php include("../cn.php")?>
<?php include("../header.php")?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Table</title>
    <link rel="stylesheet" href="css/table.css">

</head>
<body>

<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Hola!</strong> revisa que los datos estan correctos.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

<div class="table1">
<table >
    <tr class="inicio">
        <td>Id</td>
        <td>Nombre</td>
        <td>Apellido</td>
        <td>N° De Cédula</td>
        <td>Teléfono</td>
        <td>Fecha</td>
    </tr>
    <?php
    $sql = "SELECT * FROM usuarios";
    $resultado = mysqli_query($conexion, $sql);
    while($mostrar=mysqli_fetch_array($resultado)){
    ?>
    <tr>
        <td><?php echo $mostrar['id'] ?></td>
        <td><?php echo $mostrar['nombre'] ?></td>
        <td><?php echo $mostrar['apellido'] ?></td>
        <td><?php echo $mostrar['numero_de_cedula'] ?></td>
        <td><?php echo $mostrar['telefono'] ?></td>
        <td><?php echo $mostrar['fecha'] ?></td>
    </tr>
    <?php
    }
    ?>
</table>
</div>


<div class="table2">

</div>


<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script src="../js/recargar.js"></script>
</body>
</html>