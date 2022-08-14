<?php require_once('../partes/head.php') ?>
<?php require_once('../controlador/read.php') ?>
<!-- Inicio NAVBAR -->
<?php include '../partes/nav.php'; ?>
<!-- Fin NAVBAR -->
    <div class="container-fluid bg-gradient-light rounded-3 ">

        <div class="row bg-light ">
            
                
            <!-- COL.1 -->
            <div class="col-2 d-flex align-items-md-start justify-content-center"><img src="../img/logoAC.svg" width="225px" height="200" alt="" srcset=""></div>
            <!-- INICIO LISTADO COL.2-->
            <div class="col-7 bg-dark border rounded-2 mt-1" style="box-shadow:  25px 0 50px #888888,-25px 0 50px #888888;">
                <!-- Titulo -->
                <div class="text-center mt-1 ml-4"><h1 class="rounded" style="color:red; place-items: center; font-size: 45px; font-family: 'Bungee Shade', cursive; box-shadow: 0px 10px 45px -7px rgba(250,250,250,0.47);" >Lista de Tareas</h1></div>
                <br>
                <!-- Botones agregar y UBB -->
                <div class="row">
                    <div class="col-4"></div>
                    <div class="col-2 me-3"><button class="btn btn-secondary w-100" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-plus"></i> Agregar</button></div>
                    <div class="col-2"><button class="btn btn-secondary w-100"><i class="fa-solid fa-plus"></i> Tarea UBB</button></div>
                    
                </div>
                <!-- INCICIO TABLA LISTADO -->
                <table id="orden" class="table table-borderless">
                    <thead class="bg-danger">
                        <tr >
                            <th class="h5 col">#</th>
                            <th class="h5 col-7">Listado de tareas</th>
                            <th class="h5 ">Noticias</th>
                            <th class="h5 col-1">Estado</th>
                            
                            <th class="h5 col-2">Acción</th>
                        </tr>
                    </thead>
                    <br>
                    <tbody id="body" class="text-light table-bordered">
                        <?php $contador =+ 1;  if($selectSql): foreach($selectSql as $row):?>
                        <!-- Se usa replace para mostrar un salto de linea en PHP y html. -->
                        <?php $order = array("\n");
                              $replace = '<br/>';
                              $newtarea = str_replace($order,$replace,$row['Tareas']);
                        ?>
                        <tr id="registro<?php echo $row['id'];?>">
                            <td><?php echo $contador?></td>
                            <td> <div class="h6"> <?php echo $newtarea ?></div><br><?php echo '<small class="dissable">'.$row['fecha'].'</small>' ?></td>
                            <td><?php echo $row['Noticias'] ?></td>
                            <td class="col-1">
                                <?php
                                    if($row['Estado'] == 'En proceso'){
                                        echo '<span class="badge bg-dark text-white ms-1 mt-4">En proceso</span>';
                                    }else if($row['Estado'] == 'En espera'){
                                            echo '<span class="badge bg-warning text-black ms-1 mt-4">En espera</span>';
                                        }else if($row['Estado'] == 'Listo'){
                                                echo '<span class="badge bg-primary text-white ms-3 mt-4">Listo</span>';
                                            }
                                ?>
                            </td>
                            <td>
                            <a href="javascript:void(0)" class=" btn btn-outline-primary ms-4 mt-4" onclick="fun('<?php echo $row['id'];?>')"><i class="fa-regular fa-pen-to-square"></i></a>
                                <a class="btn btn-outline-danger mt-4 " href="../controlador/delete.php?id=<?php echo $row['id'];?>"><i class="fa-solid fa-trash-can"></i></a>
                                
                            </td>
                            <?php $contador++;?>
                        </tr>
                        <?php endforeach;endif ?>
                        <div id="divModal"> </div>
                    </tbody>
                </table>
                <!-- FIN TABLA LISTADO -->
                <br>
            </div>
            <!-- FIN LISTADO -->

            <!-- INICIO CALENDARIO COL.3-->
            <div class="col-3 px-5">
                <!-- Calendario -->
                <div class="" id='calendar'></div>
            </div>
            <!-- FIN COL.3 CALENDARIO -->
        </div>
        
    </div>
    
<!-- INCLUDES -->
<?php include '../partes/modal_modificar.php'; ?>
<?php include '../partes/modal.php'; ?>
<?php include '../partes/script.php'; ?>