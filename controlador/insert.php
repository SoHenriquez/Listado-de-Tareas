<?php
require_once("../db/conexion.php");

$Tarea = $_POST['tarea'];
if(isset($_POST['tarea'])){
    $insertar = "INSERT INTO `lista`( `Tareas`,  `Estado`) VALUES ('$Tarea','En espera')";
    $insertarsql=mysqli_query($con,$insertar);
}

?>
<script>
    alert("Registro Ingresado Exitosamente!");
    window.location.href='../inicio/inicio.php';
</script>