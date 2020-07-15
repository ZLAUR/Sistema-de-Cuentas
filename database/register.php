<?php 
include '../cn.php';

$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$numero_de_cedula = $_POST["numero_de_cedula"];
$telefono = $_POST["telefono"];

$insertar = "INSERT INTO usuarios(nombre, apellido, numero_de_cedula, telefono) VALUES ('$nombre', '$apellido', '$numero_de_cedula', '$telefono')";

$resultado = mysqli_query($conexion, $insertar);

if (!$resultado){
    echo '<script> alert("!!Opps Algo Ha Fallado"); window.history.go(-1); </script>';
}else{
    echo '<script> alert("El Usuario Ha Sido Guardado"); window.history.go(-1); </script>';
}
    
mysqli_close($conexion);

?>