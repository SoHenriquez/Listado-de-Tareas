<?php
    $id= $_GET['id'];
    include'../controlador/read.php';

?>

<!-- Modal -->
<div class="modal fade" id="modificar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modificar Tarea</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <?php  if($selectSql): foreach($selectSql as $row): ?>
        <?php  if($_GET['id'] == $row['id']){?>
      <form action="../controlador/update.php" method="POST">
        <div class="modal-body">
        
            <div class="row">
                <div class="col-8"></div>
                <div class="col-3">
                        <select class="form-select " name="tipo" required>
                                        <option value="0" selected>Estado</option>
                                        <option value="En proceso">En proceso</option>
                                        <option value="En espera">En espera</option>
                                        <option value="Listo">Listo</option>
                        </select>
                 </div>
            </div>

            <br>

            <div class="row">
                <div class="col-4"><label class="form-label" for="">INGRESAR TAREA</label></div>
                <div class="col"><textarea class="input-text form-control" name="tareaAc"  style="height: 135px; width:90%;"><?php echo $row['Tareas'];?></textarea></div>
            </div>  

            <br>

            <div class="row">
                
                <div class="col-4"><label class="form-label" for="">INGRESAR AVANCE</label></div>
                <div class="col"><textarea class="input-text form-control" name="noticia" placeholder="Ej conclusiones de la tarea..." style="height: 135px; width:90%;"><?php echo $row['Noticias'];?></textarea></div>
            </div> 

        </div>

        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Listo</button>
        </div>

        <input type="hidden" name="clave" value="<?php echo $row['id']; ?>">
        <?php }?>
        <?php endforeach; endif ?>
        
      </form>
    </div>
  </div>
</div>