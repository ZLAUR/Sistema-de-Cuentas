<?php include("cn.php")?>
<?php include("header.php")?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="shortcut icon" href="https://i.ibb.co/2FgnzZH/PIRATA2-0.png" type="image/x-icon">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="table/css/table.css">

</head>
<body>

<form action="database/register.php" method="post">
<h2>Igresa a los usuarios</h2>
<input  name="nombre" placeholder="Nombre" type="text" required>
<input  name="apellido" placeholder="Apellido" type="text" required>
<input  name="numero_de_cedula" placeholder="Numero de Cédula" type="text" required>
<input  name="telefono" placeholder="Numero de Teléfono" type="text" required>
<input  type="submit" value="Almacenar">
</form>
    
</body>
</html>