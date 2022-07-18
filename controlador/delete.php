<?php 
require_once("../db/conexion.php");

$eliminar = $_GET["id"]; 
  $eliminarTareaSql = "DELETE FROM `lista` WHERE id = $eliminar";
  
  $eliminarTarea = mysqli_query($con,$eliminarTareaSql);

?>
<script>
    alert("Tarea Eliminada Exitosamente!");
    window.location.href='../inicio/inicio.php';
</script>