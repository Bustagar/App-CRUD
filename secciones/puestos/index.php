<?php
require_once("../../BD.php");

if (isset($_GET["txtID"])) {
    $txtID = (isset($_GET["txtID"]) ? $_GET["txtID"] : "");
    $sentencia = $conexion->prepare("DELETE FROM `tbl_puestos` WHERE `ID`=:ID");
    $sentencia->bindValue(":ID", $txtID);
    $sentencia->execute();
    header("Location:index.php");
}

$sentencia = $conexion->prepare("SELECT * FROM `tbl_puestos`");
$sentencia->execute();
$lista_tbl_puestos = $sentencia->fetchAll(PDO::FETCH_ASSOC);
?>
<?php require_once("../../templates/header.php") ?>
<h1>Puestos</h1>
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
                        <th scope="col">Nombre del puesto</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($lista_tbl_puestos as $registro) { ?>
                    <tr class="">
                        <td scope="row">
                            <?php echo $registro ['ID']; ?>
                    </td>
                        <td>
                            <?php echo $registro ['puesto']; ?>
                    </td>
                        <td>
                            <a name="" id="" class="btn btn-info" href="editar.php?txtID=<?php echo $registro['ID']; ?>" role="button">Editar</a>
                            <a name="" id="" class="btn btn-danger" href="index.php?txtID=<?php echo $registro ['ID']; ?>" role="button">Eliminar</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php require_once("../../templates/footer.php") ?>