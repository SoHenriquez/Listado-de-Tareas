<?php
require_once('../db/conexion.php');
$codigo = $_POST['clave'];
$Estado = $_POST['tipo'];
$Tarea = $_POST['tareaAc'];
$Noticia = $_POST['noticia'];
if(isset($_POST['clave'])){
    $modificacionSql= "UPDATE `lista` SET `Tareas`='$Tarea',`Noticias`='$Noticia',`Estado`='$Estado' WHERE id='$codigo'";
    $modificacion = mysqli_query($con,$modificacionSql);
    if(!$modificacion){
        die("Fallo");
    }
}

?>
<script>
    alert("Tarea Actualizada Exitosamente!");
    window.location.href='../inicio/inicio.php';
</script>