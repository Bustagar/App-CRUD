<?php 
require_once("../../BD.php");
$sentencia = $conexion->prepare("SELECT * FROM `tbl_empleados`");
$sentencia->execute();
$lista_tbl_empleados = $sentencia->fetchAll(PDO::FETCH_ASSOC);
require_once("../../Templates/header.php") ?>

<h1>Empleados</h1>
    <div class="card">
    <div class="card-header">
        <a name="" id="" class="btn btn-primary" href="./crear.php" role="button">Agregar Registro</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Foto</th>
                        <th scope="col">CV</th>
                        <th scope="col">Puesto</th>
                        <th scope="col">Fecha de Ingreso</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($lista_tbl_empleados as $registro) { ?>
                    <tr class="">
                        <td scope="row"><?php echo $registro ['ID']; ?></td>
                        <td>
                            <?php echo $registro ['primer nombre']; ?>
                            <?php echo $registro ['segundo nombre']; ?>
                            <?php echo $registro ['primer apellido']; ?>
                            <?php echo $registro ['segundo apellido']; ?>
                        </td>
                        <td>
                            <?php echo $registro ['foto']; ?>
                        </td>
                        <td>
                            <?php echo $registro ['cv']; ?>
                        </td>
                        <td>
                            <?php echo $registro ['idpuesto']; ?>
                        </td>
                        <td>
                            <?php echo $registro ['fecha de ingreso']; ?>
                        </td>
                        <td>
                            <a name="" id="" class="btn btn-primary" href="#" role="button">Carta</a>
                            <a name="" id="" class="btn btn-info" href="../empleados/editar.php" role="button">Editar</a>
                            <a name="" id="" class="btn btn-danger" href="#" role="button">Eliminar</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        
    </div>
    
</div>


<?php require_once("../../templates/footer.php") ?>