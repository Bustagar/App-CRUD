<?php require_once("../../Templates/header.php"); ?>

<div class="card">
    <div class="card-header">
        Datos del empleado
    </div>
    <div class="card-body">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="mb-3">
            <label for="primernombre" class="form-label">Primer Nombre</label>
            <input type="text" class="form-control" name="primernombre" id="primernombre" aria-describedby="helpId" placeholder="">

            <label for="segundonombre" class="form-label">Segundo Nombre</label>
            <input type="text" class="form-control" name="segundonombre" id="segundonombre" aria-describedby="helpId" placeholder="">

            <label for="primerapellido" class="form-label">Primer Apellido</label>
            <input type="text" class="form-control" name="primerapellido" id="primerapellido" aria-describedby="helpId" placeholder="">

            <label for="segundoapellido" class="form-label">Segundo Apellido</label>
            <input type="text" class="form-control" name="segundoapellido" id="segundoapellido" aria-describedby="helpId" placeholder="">

            <label for="foto" class="form-label">Foto</label>
            <input type="file" class="form-control" name="foto" id="foto" aria-describedby="helpId" placeholder="">

            <label for="cv" class="form-label">CV</label>
            <input type="file" class="form-control" name="cv" id="cv" aria-describedby="helpId" placeholder="">

            <div class="mb-3">
                <label for="idpuesto" class="form-label">Puesto</label>
                <select class="form-select form-select-lg" name="idpuesto" id="idpuesto">
                    <option selected>Select one</option>
                    <option value="">New Delhi</option>
                    <option value="">Istanbul</option>
                    <option value="">Jakarta</option>
                </select>
            </div>

            <label for="fechadeingreso" class="form-label">Fecha de Ingreso</label>
            <input type="date" class="form-control" name="fechadeingreso" id="fechadeingreso" aria-describedby="helpId" placeholder="">
            </div>

            <button type="submit" name="" id="" class="btn btn-primary" role="button">Agregar Registro</button>
            <a name="" id="" class="btn btn-danger" href="./index.php" role="button">Cancelar</a>
        </form>
    </div>
</div>

<?php require_once("../../templates/footer.php") ?>
