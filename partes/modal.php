<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="../controlador/insert.php" method="POST">
        <div class="modal-body">
        
            
            <div class="row">
                
                <div class="col-4"><label class="form-label" for="">INGRESAR TAREA</label></div>
                <div class="col"><textarea class="input-text form-control" name="tarea" placeholder="Example text" style="height: 135px; width:80%;"></textarea></div>
            </div>  

        
         
            <!-- <div class="col"><input type="text" placeholder="Ingresar Noticia"></div> -->
            
            <!-- <div class="col-3"><select class="form-select " name="tipo" required>
                                        <option value="0" selected>Estado</option>
                                        <option value="proceso">En proceso</option>
                                        <option value="espera">En espera</option>
                                        <option value="listo">Listo</option>
                            </select>
             </div> -->
        
        
        
        
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Listo</button>
        </div>
      </form>
    </div>
  </div>
</div>