<?php require_once('../partes/head.php') ?>
<?php require_once('../controlador/read.php') ?>

    <nav class="navbar navbar-expand-sm navbar-light bg-dark">
        <div class="container-fluid ">
            <a class="navbar-brand text-light" href="#">Tareas</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarID"
                aria-controls="navbarID" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarID">
                <div class="navbar-nav">
                    <a class="nav-link active text-light" aria-current="page" href="#">inicio</a>
                    <a class="nav-link active text-light" href="">otrawea</a>
                </div>
            </div>
        </div>
    </nav>
    <div class="container-fluid bg-gradient-light ">

        <div class="container bg-light">
            <h2 class="h1 text-center">LISTADO DE TAREAS</h2>
            <br>
            <button class="btn btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal">Agregar</button>
            <hr>
            <div>
                
                <table id="orden" class="table">
                    <thead class="table-primary">
                        <tr >
                            <th class="h5 col-7">Listado de tareas</th>
                            <th class="h5 ">Noticias</th>
                            <th>ID</th>
                            <th class="h5 col-1">Estado</th>
                            
                            <th class="h5 col-1">Acción</th>
                        </tr>
                    </thead>
                    
                    <tbody id="body">
                        <?php $contador =+ 1;  if($selectSql): foreach($selectSql as $row):?>
                        <tr id="registro<?php echo $row['id'];?>">
                            <td> <div class="h6"> <?php echo $row['Tareas'] ?></div><br><?php echo '<small class="dissable">'.$row['fecha'].'</small>' ?></td>
                            <td><?php echo $row['Noticias'] ?></td>
                            <td><?php echo $row['id'];?></td>
                            <td class="col-1">
                                <?php
                                    if($row['Estado'] == 'En proceso'){
                                        echo '<span class="badge bg-dark text-white">En proceso</span>';
                                    }else if($row['Estado'] == 'En espera'){
                                            echo '<span class="badge bg-warning text-black">En espera</span>';
                                        }else if($row['Estado'] == 'Listo'){
                                                echo '<span class="badge bg-success text-white">Listo</span>';
                                            }
                                ?>
                            </td>
                            <td>
                            <a href="javascript:void(0)" class="del btn btn-outline-primary" onclick="fun('<?php echo $row['id'];?>')"><i class="fa-regular fa-pen-to-square"></i></a>
                                <a class="btn btn-outline-danger " href="../controlador/delete.php?id=<?php echo $row['id'];?>"><i class="fa-solid fa-trash-can"></i></a>
                                
                            </td>
                            <?php $contador++;?>
                        </tr>
                        <?php endforeach;endif ?>
                        <div id="divModal"> </div>
                    </tbody>
                </table>
            </div>
            <br>
        </div>
        
    </div>
    
    
    
    
<?php include'../partes/modal_modificar.php'; ?>
<?php include'../partes/modal.php'; ?>
<?php include'../partes/script.php'; ?>