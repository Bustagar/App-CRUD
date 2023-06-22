<?php 
require_once("../../BD.php");
if (isset($_GET["txtID"])) {
    $txtID = (isset($_GET["txtID"]) ? $_GET["txtID"] : "");
    $sentencia = $conexion->prepare("SELECT * FROM `tbl_puestos` WHERE ID=:ID");
    $sentencia->bindValue(":ID", $txtID);
    $sentencia->execute();
    $registro = $sentencia->fetch(PDO::FETCH_LAZY);
    $puesto = $registro['puesto'];
}
if($_POST){
    $txtID = (isset($_POST["txtID"]) ? $_POST["txtID"] : "");
    $nombredelpuesto=(isset($_POST["puesto"])? $_POST["puesto"] : "");
    $sentencia = $conexion->prepare("UPDATE `tbl_puestos` SET `puesto`=:puesto WHERE ID=:ID");
    $sentencia->bindValue(":puesto",$nombredelpuesto);
    $sentencia->bindValue(":ID", $txtID);
    $sentencia->execute();
    header("Location:index.php");
}
?>


<?php require_once("../../templates/header.php") ?>

<div class="card">
    <div class="card-header">
        Editar Puestos
    </div>
    <div class="card-body">
        <form action="" method="post">
            <div class="mb-3">
                <label for="txtID" class="form-label">ID:</label>
                <input type="text"
                class="form-control" name="txtID" id="txtID" aria-describedby="helpId" value="<?php echo $txtID;?>" placeholder="" readonly> <!-- en vez de poner read only, se puede poner disable -->
            
                <label for="nombredelpuesto" class="form-label">Nombre del Puesto</label>
                <input type="text"
                class="form-control" name="puesto" id="puesto" aria-describedby="helpId" value="<?php echo $puesto;?>" placeholder="">
            </div>
            <button type="submit" name="" id="" class="btn btn-primary" role="button">Editar Registro</button>
            <a name="" id="" class="btn btn-danger" href="./index.php" role="button">Cancelar</a>
        </form>
    </div>
</div>

<?php require_once("../../templates/footer.php") ?>
