<?php
 require_once('../db/conexion.php');

 $select = "SELECT `id`, `Tareas`, `Noticias`, `Estado`, `fecha` FROM `lista` WHERE 1";
 $selectSql = mysqli_query($con,$select);

?>
