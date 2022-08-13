<?php require_once('../partes/head.php') ?>
<?php require_once('../controlador/read.php') ?>

    <nav class="navbar navbar-expand-sm navbar-light bg-dark position-relative">
        <div class="container-fluid ">
            <div><img src="../img/logoACv2.svg"  alt="" srcset=""></div>
            <a class="navbar-brand text-light position-absolute" href="#"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarID"
                aria-controls="navbarID" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarID">
                <div class="navbar-nav">
                    <a class="nav-link active text-light" aria-current="page" href="http://localhost/phpmyadmin/index.php?route=/sql&server=1&db=lista&table=lista&pos=0">BaseDatos</a>
                    <a class="nav-link active text-light" href="">Categoría</a>
                    <a class="nav-link active text-light" href="">Lista</a>
                    <a class="nav-link active text-light" href="">Clothes</a>
                </div>
            </div>
            <!-- Reloj Digital -->
            <div class="d-grid bg-dark border rounded-2" style="color:#0d8ab8; place-items: center; font-size: 45px; font-family: 'Bungee Shade', cursive;cursor:default;" id="clock"></div>
        </div>
        
    </nav>
    <div class="container-fluid bg-gradient-light rounded-3 ">

        <div class="row bg-light ">
            
                
            
            <div class="col-2 d-flex align-items-md-start justify-content-center"><img src="../img/logoAC.svg" width="225px" height="200" alt="" srcset=""></div>
            <div class="col-7 bg-dark border rounded-2 mt-1" style="box-shadow:  25px 0 50px #888888,-25px 0 50px #888888;">
                <div class="text-center mt-1 ml-4"><h1 class="rounded" style="color:red; place-items: center; font-size: 45px; font-family: 'Bungee Shade', cursive; box-shadow: 0px 10px 45px -7px rgba(250,250,250,0.47);" >Lista de Tareas</h1></div>
                <br>
                <div class="row">
                    <div class="col-4"></div>
                    <div class="col-2 me-3"><button class="btn btn-secondary w-100" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-plus"></i> Agregar</button></div>
                    <div class="col-2"><button class="btn btn-secondary w-100"><i class="fa-solid fa-plus"></i> Tarea UBB</button></div>
                    
                </div>
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
                <br>
            </div>
            <div class="col-3 px-5">
                <!-- Calendario -->
                <div class="" id='calendar'></div>
            </div>
        </div>
        
    </div>
    
    
    
    
<?php include '../partes/modal_modificar.php'; ?>
<?php include '../partes/modal.php'; ?>
<?php include '../partes/script.php'; ?>