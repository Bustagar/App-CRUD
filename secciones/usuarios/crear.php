<?php 
if($_POST){
    require_once("../../BD.php");
    $usuario=(isset($_POST["usuario"])? $_POST["usuario"] : "");
    $password=(isset($_POST["password"])? $_POST["password"] : "");
    $correo=(isset($_POST["password"])? $_POST["password"] : "");
    $sentencia = $conexion->prepare("INSERT INTO `tbl_puestos`(`ID`, `puesto`) VALUES (null,:nombredelpuesto)");
    $sentencia->bindValue(":nombredelpuesto",$nombredelpuesto);
    $sentencia->execute();
    header("Location:index.php");
}
?>
<?php require_once("../../templates/header.php") ?>
<div class="card">
    <div class="card-header">
        Usuarios
    </div>
    <div class="card-body">
        <form action="" method="post">
            <div class="mb-3">
                <label for="nombredelusuario" class="form-label">Nombre del Usuario</label>
                <input type="text"
                class="form-control" name="nombredelusuario" id="nombredelusuario" aria-describedby="helpId" placeholder="">

                <div class="mb-3">
                    <label for="contraseña" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" name="contraseña" id="contraseña" placeholder="">
                </div>

                <div class="mb-3">
                    <label for="correo" class="form-label">Correo</label>
                    <input type="email" class="form-control" name="correo" id="correo" aria-describedby="emailHelpId" placeholder="abc@mail.com">
                </div>
            </div>
            <button type="submit" name="" id="" class="btn btn-primary" role="button">Agregar Registro</button>
            <a name="" id="" class="btn btn-danger" href="./index.php" role="button">Cancelar</a>
        </form>
    </div>
</div>
<?php require_once("../../templates/footer.php") ?>